document.addEventListener("DOMContentLoaded", function() {
    const canvas = document.getElementById('drawcanvas');
    const ctx = canvas.getContext('2d');
    let isDrawing = false
    let lastX = 0;
    let lastY = 0;
    
    canvas.addEventListener('mousedown', (e) => {
        isDrawing = true;
        [lastX, lastY] = [e.offsetX, e.offsetY];
    }); 

    canvas.addEventListener ('mousemove', (e) => {
        if (isDrawing) {
            drawLine(ctx, lastX, lastY, e.offsetX, e.offsetY);
            lastX = e.offsetX;
            lastY = e.offsetY;
        }
    });
    canvas.addEventListener('mouseup', () => {
        isDrawing = false;
    });
    canvas.addEventListener('mouseout', () => {
        isDrawing = false;
    });
    function drawLine(context, x1, y1, x2, y2) {
        context.beginPath();
        context.moveTo(x1,y1);
        context.lineTo(x2,y2);
        context.stroke();
    } 
    const forms = document.getElementById('forms');
    forms.addEventListener('submit', function(e) {
        e.preventDefault();
        const drawdata = canvas.toDataURL();
        document.getElementById('drawdata').value =  drawdata;
    });
});