<template>
	<div>
		<h1 class="text-center" style="color: #e76754">Edit data</h1>
		<hr>
    <h2>HeLlo Listeners welcome to vue {{ $route.params.id}}</h2>
    <div>
     <!--  {{details}} -->
   
		<form method="post" @submit.prevent="update">
      <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        
        <input type="text" class="form-control" v-model="details.name">


      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        
        <input type="email" class="form-control" v-model="details.email">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>

        <input type="password" class="form-control" v-model="password">
      </div>


      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Blood</label>
       
        <select class="form-control" v-model="details.blood">

          <option value="0">Select </option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="O+">O+</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
    

			
		</div>
	</div>
</template>

<script>
	import axios from 'axios'


  export default{

    data()
    {
      return {
        details: {} ,
        name:'',
        email:'',
        password:'',
        dat:'',
        blood:'',
        
      
      }
    },
    mounted(){
      this.edit()
    },
    methods:{
      
      edit()
      {
        var self=this
        axios.get('http://127.0.0.1:8000/api/find/'+this.$route.params.id)
        .then(response => {
             
              self.details = response.data
              
            

           // console.log(response);
        })


      },
      update()
      {

        const baseURL = 'http://127.0.0.1:8000/api/update/'+this.$route.params.id
        axios.post(baseURL,{

          name:this.name,
          email:this.email,
          password:this.password,

          blood:this.blood

        }).then(function(response){
          console.log(response)
        });


      }

    }
  }
  
	
</script>

<style>
	
</style>