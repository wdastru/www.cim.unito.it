/**
 * 
 */
const Http = new XMLHttpRequest();
  	Http.open("GET", url);
	Http.withCredentials = false;
	Http.setRequestHeader("Content-Type","application/json"); //
	Http.send({ 'request': "authentication token" });
	XMLHttpRequest.responseType = "json";
	
	Http.onreadystatechange=(e)=>{
		var parsed=Http.response;
		console.log(parsed["opensearch:totalResults"]);
	}