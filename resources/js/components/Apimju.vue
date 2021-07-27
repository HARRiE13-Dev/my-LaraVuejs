<template>
  <div class="font-weight text-center mt-lg">
    <h1>test</h1>
    
  </div>

</template>

<script>

export default {
  data(){
      return{
          abilities: ''
          
      }
  },
  mounted(){
      axios.get('https://api.mju.ac.th/Student/API/STUDENTe8ee4f3759cc4763a8f231965a2da6db23052020/Program/0401')
      .then(function(resp){

        console.log(resp)
      });
  }

}
</script>

<style>

</style>