<template>
    <div class="sidebar">
        
    
          <b-link href="#foo">Cras justo odio</b-link>
          <b-link href="#foo">Dapibus ac facilisis in</b-link>
          <b-link href="#foo">Morbi leo risus</b-link>
          <b-link href="#foo">Porta ac consectetur ac</b-link>
          <b-link href="#foo">Vestibulum at eros</b-link>
   

    </div>
</template>

<style>


.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
            <!-- Left Sidebar End -->