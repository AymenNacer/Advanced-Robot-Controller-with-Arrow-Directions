var canvas = document.querySelector('canvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var orderOfDirection = document.querySelector(".OOD")
var ForwardInput = document.querySelector(".Forwards")
var RightInput = document.querySelector(".Right")
var LeftInput = document.querySelector(".Left")

var button = document.querySelector(".buttonH")

var Forwards = 0 *7;
var Right = 0 *7;
var Left = 0 *7;
var str = "";
ctx = canvas.getContext("2d");
orderOfDirection.addEventListener("input" , function(){
str = orderOfDirection.value;
})

ForwardInput.addEventListener("input" , function(){
Forwards = ForwardInput.value *7;
})

RightInput.addEventListener("input" , function(){
Right = RightInput.value*7;
})

LeftInput.addEventListener("input" , function(){
Left = LeftInput.value*7;
})




button.addEventListener("click" , function(){
	ctx.beginPath();


	ctx.clearRect(0, 0, 1500, 1500);

	canvas_arrow(ctx, 700, 300,700, 300-Forwards);
	ctx.stroke();
	endOf = [700, 300-Forwards , "F"];
	//-----------------------------------------

	if (str[1]=="R"){
	canvas_arrow(ctx, endOf[0], endOf[1], endOf[0]+Right, endOf[1]);
	endOf =[endOf[0]+Right, endOf[1] , "R"]
	ctx.stroke();
	}
	else if (str[1]=="L"){
	canvas_arrow(ctx, endOf[0], endOf[1], endOf[0]-Left, endOf[1]);
	endOf = [endOf[0]-Left, endOf[1] , "L"]
	ctx.stroke();

	}

	// till now is good
	if (str[2]=="R"){
		if(endOf[2]=="R"){
			canvas_arrow(ctx, endOf[0], endOf[1], endOf[0], endOf[1] + Right);
			ctx.stroke();
			}
		else if(endOf[2]=="L"){
			canvas_arrow(ctx, endOf[0], endOf[1], endOf[0], endOf[1] - Right);
			ctx.stroke();
			}
	}
	else if (str[2]=="L"){
			if(endOf[2]=="R"){
				console.log("here ")
			canvas_arrow(ctx, endOf[0], endOf[1], endOf[0], endOf[1] - Left);
			ctx.stroke();
			}
		else if(endOf[2]=="L"){
			canvas_arrow(ctx, endOf[0], endOf[1], endOf[0], endOf[1] + Left);
			ctx.stroke();
			}
	}






})





function canvas_arrow(context, fromx, fromy, tox, toy) {
  var headlen = 10; // length of head in pixels
  var dx = tox - fromx;
  var dy = toy - fromy;
  var angle = Math.atan2(dy, dx);
  context.moveTo(fromx, fromy);
  context.lineTo(tox, toy);
  context.lineTo(tox - headlen * Math.cos(angle - Math.PI / 6), toy - headlen * Math.sin(angle - Math.PI / 6));
  context.moveTo(tox, toy);
  context.lineTo(tox - headlen * Math.cos(angle + Math.PI / 6), toy - headlen * Math.sin(angle + Math.PI / 6));
}



  
