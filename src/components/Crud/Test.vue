<template>
	<div>
		<h1 class="text-center" style="color: #e76754">Insert Data Without Image</h1>
		<hr>
		<form method="post" @submit.prevent="Insert">
			<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" v-model="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" v-model="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" v-model="password">
  </div>

  
   <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" v-model="blood">
      
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
</template>



<script>
	
	import axios from 'axios'


	export default{

		data()
		{
			return {
				name:'',
				email:'',
				password:'',
				dat:'',
				blood:''
			}
		},
		methods:{
			Insert()
	     	{

	     		const baseURL = 'http://127.0.0.1:8000/api/insert'
	     		axios.post(baseURL,{

	     			name:this.name,
	     			email:this.email,
	     			password:this.password,
	     		
	     			blood:this.blood

	     		}).then(function(response){
	     			console.log(response);
	     		});


	     }
	 }
	}
</script>



