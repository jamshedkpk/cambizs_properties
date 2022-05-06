<template>
<div>
<h3 class="text-center">List Of Countries</h3>
<router-link class="btn btn-primary" to="/">Add New Country</router-link>
<hr>
<table class="table">
<thead>
<tr>
<th>
S.No
</th>
<th>
Name
</th>
<th>
Code
</th>
<th>
Edit
</th>
<th>
Delete
</th>
</tr>
</thead>
<tbody>
<tr v-for="country in country" :key="country.id">
<td>
Id
</td>
<td>
{{ country.name }}
</td>
<td>
{{ country.code }}
</td>
<td>
<a href="">
<span class="mdi mdi-table-edit
"></span>
</a>
</td>
<td>
<a href="">
<span class="mdi mdi-delete"></span>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</template>
<script>
import axios from 'axios'
export default
{
name:'Country-Index',
data()
{
return{
country:
{
name:'',
code:''
}
}
},
mounted()
{
this.getCountries();    
},
methods:{
async getCountries()
{
let response =await axios.get('/country').then(response=>{
this.country=response.data.country;
}).catch(error=>{
console.warn('error');
});
}
}
}
</script>
<style>
</style>