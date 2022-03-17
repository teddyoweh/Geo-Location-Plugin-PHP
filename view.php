<?php 
include 'location.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<table class="table table-dark table-striped">
   
  <tbody>
  <tr>
      <th scope="row">State Code</th>
      <td ><?php echo location::statecode()?></td>
     
    </tr>
    <tr>
      <th scope="row">Country Code</th>
      <td ><?php echo location::countrycode()?></td>
     
    </tr>
    <tr>
      <th scope="row">Country</th>
      <td><?php echo location::country()?></td>
      
    </tr>
    <tr>
      <th scope="row">City</th>
      <td><?php echo location::city()?></td>
       
    </tr>
    <tr>
      <th scope="row">State</th>
      <td ><?php echo location::state()?></td>
     
    </tr>
    
    <tr>
      <th scope="row">IP ADDRESS</th>
      <td ><?php echo location::ipaddress()?></td>
     
    </tr>
    <tr>
      <th scope="row">Latitude</th>
      <td ><?php echo location::latitude()?></td>
     
    </tr>
    <tr>
      <th scope="row">Longitude</th>
      <td ><?php echo location::longitude()?></td>
     
    </tr>
    <tr>
      <th scope="row">ZipCode</th>
      <td ><?php echo location::zipcode()?></td>
     
    </tr>
    <tr>
      <th scope="row">Latitude & Longitude</th>
      <td ><?php echo location::latlog()?></td>
     
    </tr>
    
    <tr>
      <th scope="row">Address</th>
      <td ><?php echo location::address()?></td>
     
    </tr>
  </tbody>
</table>
</body>

<style>
    body{
        margin:10px;
    }
</style>