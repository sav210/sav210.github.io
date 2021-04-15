function count(id, start, end, duration, prefix='', suffix='', inc=1) {
    if (start === end) return;
    if(start > end)
    {
    var range = start - end;
    }
    else if(end > start)
    {
        var range = end - start;
    }
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = duration / range;
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        if(start > end)
        {
            current -= inc;
        }
        if(end > start)
        {
            current += inc;
        }
        if(inc > 0)
        {
            inc -= (inc / 2) / range;
        }
        else{
            clearInterval(timer);
        }
        if (current >= end) {
            current = end;
            clearInterval(timer);
            
    }
    obj.innerHTML = prefix + Math.floor(current) + suffix;
    }, stepTime);
}