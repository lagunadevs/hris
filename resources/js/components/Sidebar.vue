<template>

    <div class="wrapper" type="dark" variant="info">
      <div class="sidebar bg-dark">
        <div class="search">
          <center>
            <input class="searchBox" 
                  v-model="search"
                  type="text"
                  placeholder="Search"
                  v-on:input="searchContent()">
          </center>          
        </div>

        <div v-for="content in contents">
          <router-link :to="{name: content.route}" class="text-white">{{content.name}}</router-link>
        </div>
       
      </div>
    </div>

</template>

<style type="text/css">
  .searchBox {
    border: 2px solid white;
    text-align: center;
    background: transparent;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    padding-top: 10px;
    color: white;
  }

  .search {

    padding-top: 20%;
  }
  .sidebar {
    margin-top: 1%;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: hidden;
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
<script>
    export default {

      data() {
        return {
          sideBarContent: null,
          search : '',
          contents: [ 
          {
            name : "Departments",
            route : "departments.index"
          },
          {
            name : "Employees",
            route : "employees"
          },
          {
            name : "About",
            route : "about"
          },
          {
            name : "Contact Us",
            route : "contact"
          },
          {
            name : "Login",
            route : "login"
          }]
        };
      },
      methods: {
        toggleSidebar : function() {
          this.$sidebar.displaySidebar(!this.$sidebar.showSidebar);
        },

        searchContent : function () {
          var contents = [];
          contents = this.contents;
          if (this.search.length <= 3) {
            return this.contents;
          } else {
            return this.contents = this.contents.filter(content => {
              return content.name.toLowerCase().includes(this.search.toLowerCase())

            })
          }
          
        }
      }

    }
</script>