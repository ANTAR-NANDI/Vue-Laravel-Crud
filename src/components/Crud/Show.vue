<template>
	<div class="container">
		 <div v-for="(item,index) in items" :key="index" class="card" style="width: 16rem;">
       <p class="card-text">{{item.blood}}</p>
       
           <div class="card-body">

              <h5 class="card-title">{{item.email}}</h5>
          </div>
      

      <div class="card-footer">
        <p class="card-text">{{item.name}}</p>
        <button @click="edit(index)" class="btn btn-secondary"><router-link :to="{path:'/edit/'+item.id}">Edit</router-link></button>

    </div> 
</div>

	</div>
</template>

<script>
	export default{
		data()
		{
			return{
				items:[],
				

			}
		},
		mounted()
		{
			
			this.fetchdata()
		},
		methods:{
			fetchdata()
			 {
			  var self=this
			  axios.get('http://127.0.0.1:8000/api/show')
			  .then(response => {
			           
			              self.items = response.data
			            //  self.data = response.data
			              
			        })
			
	}
}
	}

</script>

<style>
	

</style>