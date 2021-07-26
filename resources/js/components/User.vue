<template>
  <div class="font-weight text-center mt-lg">
      <h1>Example</h1>
      <h2>Test Database Vue.js mixed Laravel.php</h2>
    <br><br>
    <div class="container ">
     
      <table class="table table-dashbordered">
        <tr>
          <th>Student ID</th>
          <th>Name</th>
          <th>City</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <tr v-for="user in users" v-bind:key="user.id">
          <td>{{user.id}} </td>
          <td>{{user.name}} </td>
          <td>{{user.city}} </td>
          <td><a :href="'/users/'+user.id+'/edit'" class="btn btn-warning">Edit</a> </td>
          <td><a href="" class="btn btn-danger">Delete</a> </td>
        </tr>
      </table>
      <br>
      <a href="/users/create" class="btn btn-primary">Add Data</a>
    </div>




  </div>

</template>

<script>

export default {
    mounted(){
      this.getUserData();
    },
    methods:{
      getUserData(){
          axios.get('api/users').then(Response=>{
            //console.log(Response);
            this.users=Response.data;

          });
      }
    },
    data(){
      return{
        users:[],
        user:{
          id:0,
          name:'',
          city:''
        }
      }
    }

}
</script>

<style>

</style>