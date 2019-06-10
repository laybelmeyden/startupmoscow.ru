$('.jqcol:nth-child(1)').addClass('col s12 m12 l6');

$('.jqcol:gt(0):lt(4)').addClass('col s12 m12 l6').wrapAll('<div class="col s12 m12 l6" style="padding: 0; margin: 0;"></div>');
$('.jqcol:gt(0):lt(4) .whiteblock').addClass('whiteblock3');


$('.jqcol:gt(4):lt(4)').addClass('col s12 m12 l6').wrapAll('<div class="col s12 m12 l6"  style="padding: 0; margin: 0;"></div>');
$('.jqcol:gt(4):lt(4) .whiteblock').addClass('whiteblock3');

$('.jqcol:gt(1)').addClass('col s12 m12 l6');

  $('.img_thumbnail').each(function(){
    var newsrc = $(this).attr('src').replace('.','-cropped.')

$(this).attr('src',newsrc);

  })
$('.carousel').carousel({
    padding:400,
});
$(".button-collapse").sideNav();

$('.all').click(function(){
    $('.project').fadeIn(1000);
     $('.chip').removeClass('active')
    $(this).addClass('active')
})

$('.chip').not('.all').click(function(){
    $('.chip').removeClass('active')
    $(this).addClass('active')
    $('.project').css('display','none');
    $('.'+this.id+'-pr').fadeIn(1000);
});
$('select').material_select();
$('.modal').modal();

function check(){
    var cb = document.getElementsByTagName('input'),
        L = cb.length-1,
        f=true;
    for(;L>=0;L--){
        if (cb[L]['type']=='checkbox' && cb[L]['checked']==true){
            f=!f; break;
        }
    }   
    document.getElementById('delButton').disabled = f;
};
var LineChart = function( options ) {

  var data = options.data;
  var canvas = document.getElementById('c1');
  var context = canvas.getContext( '2d' );
  
    
  var rendering = false,
      paddingX = 40,
      paddingY = 40,
width = options.width || window.innerWidth-30,
height = 120,
      progress = 0;

  canvas.width = width;
  canvas.height = height;

  var maxValue,
      minValue;

  var y1 = paddingY + ( 0.05 * ( height - ( paddingY * 2 ) ) ),
      y2 = paddingY + ( 0.50 * ( height - ( paddingY * 2 ) ) ),
      y3 = paddingY + ( 0.95 * ( height - ( paddingY * 2 ) ) );
  
  format();
  render();
  
  function format( force ) {

    maxValue = 0;
    minValue = Number.MAX_VALUE;
    
    data.forEach( function( point, i ) {
      maxValue = Math.max( maxValue, point.value );
      minValue = Math.min( minValue, point.value );
    } );

    data.forEach( function( point, i ) {
      point.targetX = paddingX + ( i / ( data.length - 1 ) ) * ( width - ( paddingX * 2 ) );
      point.targetY = paddingY + ( ( point.value - minValue ) / ( maxValue - minValue ) * ( height - ( paddingY * 2 ) ) );
      point.targetY = height - point.targetY;
  
      if( force || ( !point.x && !point.y ) ) {
        point.x = point.targetX + 30;
        point.y = point.targetY;
        point.speed = 0.04 + ( 1 - ( i / data.length ) ) * 0.05;
      }
    } );
    
  }

  function render() {

    if( !rendering ) {
      requestAnimationFrame( render );
      return;
    }
    
    context.font = '10px sans-serif';
    context.clearRect( 0, 0, width, height );

    context.fillStyle = 'transparent';
    context.fillRect( paddingX, y1, width - ( paddingX * 2 ), 1 );
    context.fillRect( paddingX, y2, width - ( paddingX * 2 ), 1 );
    context.fillRect( paddingX, y3, width - ( paddingX * 2 ), 1 );
    
    if( options.yAxisLabel ) {
      context.save();
      context.globalAlpha = progress;
      context.translate( paddingX - 15, height - paddingY - 10 );
      context.rotate( -Math.PI / 2 );
      context.fillStyle = '#fff';
      context.fillText( options.yAxisLabel, 0, 0 );
      context.restore();
    }

    var progressDots = Math.floor( progress * data.length );
    var progressFragment = ( progress * data.length ) - Math.floor( progress * data.length );

    data.forEach( function( point, i ) {
      if( i <= progressDots ) {
        point.x += ( point.targetX - point.x ) * point.speed;
        point.y += ( point.targetY - point.y ) * point.speed;

        context.save();
        
        var wordWidth = context.measureText( point.label ).width;
        context.globalAlpha = i === progressDots ? progressFragment : 1;
        context.fillStyle = point.future ? '#aaa' : '#fff';
        context.fillText( point.label, point.x - ( wordWidth / 2 ), height - 18 );

        if( i < progressDots && !point.future ) {
          context.beginPath();
          context.arc( point.x, point.y, 4, 0, Math.PI * 2 );
          context.fillStyle = 'white';
          context.fill();
        }

        context.restore();
      }

    } );

    context.save();
    context.beginPath();
    context.strokeStyle = 'white';
    context.lineWidth = 2;

    var futureStarted = false;

    data.forEach( function( point, i ) {

      if( i <= progressDots ) {

        var px = i === 0 ? data[0].x : data[i-1].x,
            py = i === 0 ? data[0].y : data[i-1].y;

        var x = point.x,
            y = point.y;

        if( i === progressDots ) {
          x = px + ( ( x - px ) * progressFragment );
          y = py + ( ( y - py ) * progressFragment );
        }

        if( point.future && !futureStarted ) {
          futureStarted = true;

          context.stroke();
          context.beginPath();
          context.moveTo( px, py );
          context.strokeStyle = '#aaa';

          if( typeof context.setLineDash === 'function' ) {
            context.setLineDash( [2,3] );
          }
        }

        if( i === 0 ) {
          context.moveTo( x, y );
        }
        else {
          context.lineTo( x, y );
        }

      }

    } );

    context.stroke();
    context.restore();

    progress += ( 1 - progress ) * 0.03;
  
    requestAnimationFrame( render );

  }
  
  this.start = function() {
    rendering = true;
  }
  
  this.stop = function() {
    rendering = false;
    progress = 0;
    format( true );
  }
  
  this.restart = function() {
    this.stop();
    this.start();
  }
  
  this.append = function( points ) {    
    progress -= points.length / data.length;
    data = data.concat( points );
    
    format();
  }
  
  this.populate = function( points ) {    
    progress = 0;
    data = points;
    
    format();
  }

};

var chart = new LineChart({ data: [] });

reset();
function start(){chart.start();}

function append() {
  chart.append([
    { label: '', value: 1300 + ( Math.random() * 1500 )}
  ]);
}

function restart() {
  chart.restart();
}

function reset() {
  chart.populate([
    { label: '', value: 0 },
    { label: '', value: 100 },
    { label: '', value: 200 },
    { label: '', value: 840 },
    { label: '', value: 620 },
    { label: '', value: 500 },
    { label: '', value: 600 },
    { label: '', value: 1100 },
    { label: '', value: 800 },
    { label: '', value: 900 },
    { label: '', value: 1200},
    { label: '', value: 1400}
  ])
}
$('#ivan').css('display','none')


$(document).ready(function(){
  setInterval(restart,3000)
  setTimeout($('#ivan').fadeIn(4000),5000);
  
})


let width = $('.container').css('width');
$('canvas').css('width',width);


let x = $('#id').text()
var sliced = x.slice(0,30);
if (sliced.length < x.length) {
sliced += '...';
}
 $('#id').text(sliced);
 
 






