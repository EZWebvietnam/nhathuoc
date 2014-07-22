function LoadPagging(pi, ps, url, total_page, urlext) {

    var sep = '/';
    if (url.indexOf('?') > 0) {
        sep = '&pi=';
        if (url.indexOf(sep) > 0) {
            url = url.substring(0, url.indexOf(sep));
        }
    }

    var content = '';

    var offset = 12;

    var offhalf = 5;
    var pos = pi - 1; // position in array

    if (ps <= 1 || pi < 1 || pi > ps) {
        return false;
    }
    // array

    // ps > 1
    // previous
    if (total_page != 1)
    {
        if (pi == 1) {
            content += "<div class='num_page' style='display:none;'> <a href='#'><<</a></li></div>";
        } else {
            if (pi == 2) {
                content += '<div class="num_page"><a href="' + url + '"><<</a></div>';
            } else {

                content += '<div class="num_page"><a href="' + url + sep + 'page/' + (pi - 1) + '"><<</a></div>';
            }
        }

        // Length Pagging
        var from = 1;
        var to = offset;

        if (ps <= offset) {
            to = ps;
        } else if (ps > offset) {

            var left = pi - offhalf;
            if (left < 0)
            {
                left = 1;
            }
            var right = pi + offhalf;
            if (right >= total_page)
            {

                right = total_page;
            }

            if (left < 1) {
                from = 1;
                to = total_page;

            } else if (right > ps) {
                to = ps;
                from = ps - offset + 1;
            } else {
                from = left;
                to = right;

            }
        }

        for (var i = from; i <= to; i++) {
            var activeLi = '';
            var active = '';
            if (pi == i) {
                content += '<div class="select"><a href="'+url+'/page/' + i + '">' + i + '</a></div>';
            } else {
                var rel = ' rel="next" ';
                if (i < pi) {
                    rel = ' rel="prev" ';
                }
                if (i == 1) {

                    content += '<div class="num_page"><a href="' + url + '" ' + active + ' ' + rel + '>' + i + '</a></div>';
                } else {

                    content += '<div class="num_page"><a href="' + url + sep + 'page/' + i + '" ' + active + ' ' + rel + '>' + i + '</a></div>';
                }
            }
        }

        // Next
        if (pi == total_page) {
            content += "<div class='num_page' style='display:none;'> <a href='#'>>></a></div>";
        } else {
            content += '<div class="num_page"><a href="' + url + sep + 'page/' + (pi + 1) + '">>></a></div>';
        }
    }
    return content;
}