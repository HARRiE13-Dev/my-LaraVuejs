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
           <button class="btn btn-primary" v-on:click="addNewUser()">Save</button>
        </div>

      </from>
  </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      name:'',
      city:''
    }
  },
    
     
}
</script>

<style>

</style>