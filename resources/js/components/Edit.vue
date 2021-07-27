<template>
<div>
  <div class="container text-center">
      <h2>Edit Data</h2>
      <from action='/users'>
        <div class='from-group'>
            <label>Name</label>
            <input type="text" class="from-control" v-model="name">
        </div>
        <div class='from-group'>
            <label>City</label>
            <input type="text" class="from-control" v-model="city">
        </div>
        <div class='from-group'>
           <button class="btn btn-primary" v-on:click="updateUser()">Update</button>
        </div>

      </from>
  </div>
</div>
</template>

<script>
export default {
  props:['id'],
  data(){
    return{
      name:'',
      city:''
    }
  },mounted(){
    axios.get('/api/users/'+this.id).then(Response=>{
      //console.log(Response.data);
      var user=Response.data;
      this.name=user.name;
      this.city=user.city;

    });
  },
  methods:{
    updateUser(){
       axios.put('/api/users/'+this.id,{
                name:this.name,
                city:this.city
        });
    }
  }
    
     
}
</script>

<style>

</style>