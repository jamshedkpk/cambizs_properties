<template>
<div>
<h3 class="text-center">List Of Cities</h3>
<router-link class="btn btn-primary" to="/">Add New City</router-link>
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
Country
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
<tr v-for="c in city" :key="c.id">
<td>
Id
</td>
<td>
{{ c.name }}
</td>
<td>
{{ c.country_id }}
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
name:'City-Index',
data()
{
return{
city:
{
name:'',
}
}
},
mounted()
{
this.getcities();    
},
methods:{
async getcities()
{
let response =await axios.get('/city').then(response=>{
this.city=response.data.city;
}).catch(error=>{
console.warn('error');
});
}
}
}
</script>
<style>
</style>