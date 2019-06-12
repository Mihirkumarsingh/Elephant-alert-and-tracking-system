<script type="text/javascript">
	var φ1=(((21.24881753)*3.14159)/180);
	var λ1= (((81.60974376)*3.14159)/180);
	var d=5;
	var R=6400;
	var north=0;
	var east=((90*3.14159)/180);
	var south=((180*3.14159)/180);
	var west=((270*3.14159)/180);
	var φ2 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
		Math.cos(φ1)*Math.sin(d/R)*Math.cos(north) );
	var λ2 = λ1 + Math.atan2(Math.sin(north)*Math.sin(d/R)*Math.cos(φ1),
		Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ2));
	console.log((φ2*180)/3.14159);
	console.log((λ2*180)/3.14159);
	var φ3 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
		Math.cos(φ1)*Math.sin(d/R)*Math.cos(east) );
	var λ3 = λ1 + Math.atan2(Math.sin(east)*Math.sin(d/R)*Math.cos(φ1),
		Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ3));
	console.log((φ3*180)/3.14159);
	console.log((λ3*180)/3.14159);
	var φ4 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
		Math.cos(φ1)*Math.sin(d/R)*Math.cos(south) );
	var λ4 = λ1 + Math.atan2(Math.sin(south)*Math.sin(d/R)*Math.cos(φ1),
		Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ4));
	console.log((φ4*180)/3.14159);
	console.log((λ4*180)/3.14159);
	var φ5 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
		Math.cos(φ1)*Math.sin(d/R)*Math.cos(west) );
	var λ5 = λ1 + Math.atan2(Math.sin(west)*Math.sin(d/R)*Math.cos(φ1),
		Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ5));
	console.log((φ5*180)/3.14159);
	console.log((λ5*180)/3.14159);
	</script>