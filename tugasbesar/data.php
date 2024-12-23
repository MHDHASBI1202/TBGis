<?php  
$connection = pg_connect("host='localhost' port='1202' user='postgres' password='Naynay12' dbname='tugas_besar'"); 

$sql = "SELECT 
          gid, 
          id, 
          bangunan, 
          user_ig,
          alamat,
          fasilitas,
          ST_AsGeoJSON(geom) AS geometry, 
          ST_Y(ST_CENTROID(geom)) AS lat, 
          ST_X(ST_CENTROID(geom)) AS lng 
        FROM petarev_region"; 

$geojson = array( 
    'type'      => 'FeatureCollection', 
    'features'  => array() 
); 

$query = pg_query($connection, $sql); 
if(pg_num_rows($query) == 0) return 0; 

while($row = pg_fetch_assoc($query)){  

    $feature = array( 
        "type" => 'Feature', 
        'geometry' => json_decode($row['geometry'], true), 
        'properties' => array( 
            'gid' => $row['gid'], 
            'id' => $row['id'], 
            'bangunan' => $row['bangunan'], 
            'user_ig' => $row['user_ig'],  
            'alamat' => $row['alamat'],
            'fasilitas' => $row['fasilitas'], 
            'center' => array( 
                'lat' => $row['lat'], 
                'lng' => $row['lng']
            ) 
        ) 
    );
    array_push($geojson['features'], $feature);    
} 

echo json_encode($geojson); 
?>