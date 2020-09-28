<template>
  <div>
<form @submit.prevent="storeEchantillon">
       <div class="form-group">
        <label for="">Designation</label>
        <input type="text" v-model="designation" class="form-control" id="designation"  name="designation" >
            <div class="" v-if="errors && errors.designation">
               <span class="text-danger">{{ errors.designation[0]}}</span>
            </div>
       </div>

       <div class="form-group">
        <label for="">Date Labo</label>
        <input type="date" v-model="date" class="form-control" id="date" name="date">
           <div class="" v-if="errors && errors.date">
               <span class="text-danger">{{ errors.date[0]}}</span>
            </div>
       </div>
       

       <div class="form-group">
        <label for="">Numéro Fiche Demande</label>
        <select v-model="fichedemande_id" name="fichedemande_id" id="fichedemande_id"  class="form-control">
           <option value=""></option>
           <option v-for="fiches in fiche" :value="fiches.id" :key="fiches.id"> 
             {{ fiches.id }}
           </option>
        </select>
           <div class="" v-if="errors && errors.fichedemande_id">
               <span class="text-danger">{{ errors.fichedemande_id[0]}}</span>
            </div>
       </div>

       <div class="form-group">
        <label for="">Nom du Client</label>
        <select v-model="client_id" name="client_id" id="client_id" class="form-control">
           <option value=""></option>
           <option v-for="clients in client" :value="clients.id" :key="clients.id">
              {{ clients.nom }}
           </option>
        </select>
             <div class="" v-if="errors && errors.client_id">
               <span class="text-danger">{{ errors.client_id[0]}}</span>
            </div>
       </div>

       <div class="form-group">
        <label for="">Type Echantillon</label>
         <select name="type_echantillon_id" id="typeechantillon_id" v-model="type_echantillon_id"  class="form-control">
           <option value=""></option>
           <option v-for="types in type" :value="types.id" :key="types.id">
              {{ types.type }}
           </option>
        </select>
          <div class="" v-if="errors && errors.typeechantillon_id">
               <span class="text-danger">{{ errors.typeechantillon_id[0]}}</span>
            </div>
       </div>
       <button type="submit" class="btn btn-success">Enregistrer</button>
   </form>
  </div>
</template>



<script>
export default {

 
   data(){
      return {
         client: {},
         fiche : {} ,
         type : {} ,
         // insert echantillon
         designation : '',
         date : '',
         fichedemande_id : '',
         client_id : '',
         type_echantillon_id : '',
        errors:'',
      }
   },

   methods:{
     storeEchantillon(){
   //STORE echantillon
       axios.post('http://127.0.0.1:8000/echantillon',{
            designation : this.designation,
            date : this.date,
            fichedemande_id : this.fichedemande_id,
            client_id :  this.client_id,
            type_echantillon_id : this.type_echantillon_id,
        })
      .then(response =>
         window.location.reload(),
      )
      .catch(error =>{
         if(error.response.status == 422){
              this.errors = error.response.data.errors;
              console.log('error');
         }
      });
         
        
     },
},

   created(){
    
     //client list
     axios.get('http://127.0.0.1:8000/getclient')
      .then(response => this.client = response.data)
      .catch(error =>console.log(error))


      //fiche demande 
       axios.get('http://127.0.0.1:8000/getFiche')
      .then(response => this.fiche = response.data)
      .catch(error => console.log(error))


      //type echantillon
        axios.get('http://127.0.0.1:8000/typeechantillon')
      .then(response => this.type = response.data)
      .catch(error => console.log(error))


   },

   mounted(){
     
   } 
}
</script>