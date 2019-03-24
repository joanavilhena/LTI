<template>
 <div class="container">
    <div class="jumbotron">
      <h1 align="center">{{title}}</h1>
    </div>
      <table class="table table-striped table-dark">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Photo</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              {{this.nodes}}
            <tr v-for="(node,index) in nodes" v-bind:key="node.link-id">
                {{this.nodes}}
            </tr>
            
           
            
          </tbody>
      </table>

    </div>
    
</template>
<script>
 module.exports = {
    data: function() {
      return{
          title:"Topology",
          nodes:[], 
          topology:[],
          flows:[],
      }
    
    },
    methods:
    {

        
        
         








    },
    beforeMount(){
     
      
    },
    mounted()
    {
        axios.get('api/test')
            .then(function (response) {
            // handle success
           this.nodes = Object.entries(response.data);
          
            //nodes = arr;
            console.log(response.data);
            
             let listOfObjects = Object.keys(response.data).map((key) => {
                 return response.data[key]
                })

                

          //  console.log(listOfObjects[0][1]);
            this.nodes = listOfObjects[0]['topology'][0]['link'];
            JSON.stringify(this.nodes);
            console.log(this.nodes);
            //console.log(this.nodes[0][1]['topology'][0]['link']);
        
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
        
        },
    created()
    {
        
    
    }

}
</script>
