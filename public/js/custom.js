// var DatatableHtmlTableDemo;
if ($('#html_table').length) {
	var DatatableHtmlTableDemo=function(){var e=function(){
		var e= data,
			a=$("#html_table").mDatatable({
			data:{
				type:"local",
				source:e,
				pageSize:10
				},
			layout:{
				theme:"default",class:"",scroll:!1,height:450,footer:!1},sortable:!0,pagination:!0,
			columns:[
				{field:"id",title:"#",width:50,sortable:!1,selector:!1,textAlign:"center"},
				{field:"name",title:"Name",width:150,textAlign:"center"},
				{field:"dob",title:"Date of Birth",textAlign:"center"},
				{field:"email",title:"Email",width:250,textAlign:"center"},
				{field:"phone",title:"Phone",textAlign:"center"},
				{field:"church",title:"Church",width:150,textAlign:"center"},
				{field:"type",title:"Position",textAlign:"center",template:function(e){var a={0:{title:"Main Hall",state:"primary"},1:{title:"Balcon",state:"info"},2:{title:"Lobby",state:"success"}};return'<span class="m-badge m-badge--'+a[e.type].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+a[e.type].state+'">'+a[e.type].title+"</span>"}},
				{field:"attend",title:"Attend",textAlign:"center"},
				{field:"registration_code",title:"Registration Code",textAlign:"center"}
			]}),i=a.getDataSourceQuery();$("#m_form_search").on("keyup",function(e){a.search($(this).val().toLowerCase())}).val(i.generalSearch)};return{init:function(){e()}}}();jQuery(document).ready(function(){DatatableHtmlTableDemo.init()});
}