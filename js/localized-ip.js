$( document ).ready(function() {
	console.log("loaded");
	/*
	The default country is US and the default site is google.com
	The code below is placed on the default site. The other site where you want to send visitors from the rest of the world is google.co.uk
	*/
	var uk = 'UK';
	var us = 'US';
	var ukSite = 'https://ecins.com/';
	var usSite = 'https://ecins.com/us/';
	fetch('https://ipapi.co/country/')
	 .then(response => {
	   if (response.ok) {
	     return response.text();
	   } else {
	     throw new Error('HTTP Error ' + response.status);
	   }
	 })
	 .then(country => {
	   if (country == us) {
		     console.log('Redirecting to country specific website');
		     window.location.replace(usSite);
	   } else {
	   		window.location.replace(ukSite);
	   }
	 })
	 .catch(function(error) {
	   // Network error
	   // Script blocked by browser extension
	   // 429 error (too many requests)
	   console.log(error);
	 });
});