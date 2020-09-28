<template>
  <div>
<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
     <div class="col-md-12">
     
          <div class="card">
               <div class="card-header">
                    <h4 class="card-title text-success pb-2">Liste Echantillons</h4>
               </div>
               <div class="">
                    <div class="table-responsive">
                         <table class="table table-hover mt-6">
                              <thead class="text-success">
                                   <tr>
                                        <th>Désignation</th>
                                        <th>date</th>
                                        <th>Client</th>
                                        <th>Fiche demande</th>
                                        <th>Type echantillon</th>
                                   </tr>
                              </thead>
                              <tbody>
                                <tr v-for="echantillon in echantillons" :key="echantillon.id">
                                   <td>{{ echantillon.designation }}</td>
                                   <td>{{ echantillon.date }}</td>
                                   <td>{{ echantillon.client.nom }}</td>
                                   <td>{{ echantillon.fichedemande_id }}</td>
                                   <td>{{ echantillon.typeechantillon.id }}</td>
                                </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Basic Tables end -->
 </div>
</template>

<script>
export default {

  data(){
      return{
       
    echantillons:[],
  
    }
  },

  methods:{
      getEchantillon(){
       axios.get('http://127.0.0.1:8000/echantillon.get')
      .then(response => this.echantillons = response.data)
      .catch(error => console.log(error))

 
  }

  },

mounted()
{
 this.getEchantillon();
}


}
</script>