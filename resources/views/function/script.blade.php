<script>
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
// We execute the same script as before
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);
});

    $('#fullpage').fullpage({
        sectionSelector: '.vertical-scrolling',
        navigation: false,
        slidesNavigation: false,
        controlArrows: false,
        anchors:[@foreach ($data as $dat)
            '{{ $dat->slugs[app()->getLocale() . '_slug'] }}',
        @endforeach]
    });

    $(document).mousemove(function(e) {
        e.preventDefault();
        cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;");
    });

    function changeColor() {

        @for ($i=0;$i<count($data);$i++)

            @if ($i==0 || $i==count($data))
                if (window.location.hash == '#{{$data[$i]->slugs[app()->getLocale().'_slug']}}' || window.location.hash == ' ') {
                    document.getElementById('pages').className = '';
                    $('#pages').addClass('{{$data[$i]->slugs[app()->getLocale().'_slug']}}-bg');

                    $('.cursor').addClass('white');

                    document.title = '{{$data[$i]->title[app()->getLocale().'_title']}}';
                    $("meta[name='title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[name='description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[name='keywords']").attr("content", '{{$data[$i]->keywords[app()->getLocale().'_keywords']}}');
                    $("meta[name='keywords']").attr("content", '{{$data[$i]->keywords[app()->getLocale().'_keywords']}}');
                    $("meta[property='og\\title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[property='og\\description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[property='og\\image']").attr("content", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo }}');
                    $("meta[property='twitter\\title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[property='twitter\\description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[property='twitter\\image']").attr("content", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo }}');
                    $("link[rel='shortcut icon']").attr("href", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->favicon }}');

                }
            @else
                else if (window.location.hash == '#{{$data[$i]->slugs[app()->getLocale().'_slug']}}') {
                    document.getElementById('pages').className = '';
                    $('#pages').addClass('{{$data[$i]->slugs[app()->getLocale().'_slug']}}-bg');
                    $('.cursor').addClass('white');

                    document.title = '{{$data[$i]->title[app()->getLocale().'_title']}}';
                    $("meta[name='title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[name='description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[name='keywords']").attr("content", '{{$data[$i]->keywords[app()->getLocale().'_keywords']}}');
                    $("meta[name='keywords']").attr("content", '{{$data[$i]->keywords[app()->getLocale().'_keywords']}}');
                    $("meta[property='og\\title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[property='og\\description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[property='og\\image']").attr("content", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo }}');
                    $("meta[property='twitter\\title']").attr("content", '{{$data[$i]->title[app()->getLocale().'_title']}}');
                    $("meta[property='twitter\\description']").attr("content", '{{strip_tags($data[$i]->description[app()->getLocale().'_description'])}}');
                    $("meta[property='twitter\\image']").attr("content", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo }}');
                    $("link[rel='shortcut icon']").attr("href", '{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->favicon }}');

                }
            @endif
            else if(window.location.hash == '#'){}
        @endfor
    }

    $(window).bind('hashchange', function() {
setTimeout(function() {
    changeColor();
}, 250);
});

$(window).load(function() {
changeColor();
});

const cursor = document.querySelector('.cursor');

$("a").mouseover(function(){
cursor.classList.add("hover");
});

$("a").mouseout(function(){
cursor.classList.remove("hover");
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    VANTA.NET({
        el: "#hero",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.0,
        color: 0xd4d4d4,
        backgroundColor: 0xffffff,
        points: 18.00,
        maxDistance: 14.00,
        spacing: 18.00
    });
}else{
    VANTA.NET({
        el: "#hero",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.0,
        color: 0xd4d4d4,
        backgroundColor: 0xffffff,
        points: 10.00,
        maxDistance: 20.00,
        spacing: 15.00
    });
}
</script>


