/* ***********************For Web Navigation ***************************** */
var whoweare = '<div class="content">'+
                '<div class="box">'+
                    '<div class="left-box">'+
                        '<p class="title"><a href="who.php">Who we are</a></p>'+
                        '<p class="describe">TJV IS A MULTI DISCIPLINARY PUBLIC POLICY FORUM WORKING AT THE INTERSECTION OF POLITICAL, SOCIAL, ECONOMIC AND ENVIRONMENTAL THEORIES THROUGH THE LENS OF MARX, GANDHI AND AMBEDKAR.</p>'+
                    '</div>'+
                    '<div class="right-box">'+
                        '<ul>'+
                            '<li><a href="about.php">ABOUT</a></li>'+
                            '<li><a href="founder.php">FOUNDER</a></li>'+
                            '<li><a href="governance.php">GOVERNANCE</a></li>'+
                            '<li><a href="findus.php">FIND US</a></li>'+
                        '</ul>'+
                    '</div>'+
               '</div>'+
            '</div>';
var academicActivity = '<div class="content">'+
                         '<div class="box">'+
                            '<div class="left-box">'+
                                '<p class="title"><a href="academic-activity.php">Academic Activity</a></p>'+
                                '<p class="describe">Featuring Research and Analysis by Experts  </p>'+
                            '</div>'+
                            '<div class="right-box">'+
                                '<ul>'+
                                    '<li><a href="publications.php">Publications</a></li>'+
                                    '<li><a href="blogs.php">Blogs & Posts</a></li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                     '</div>';
var topicsCovered = '<div class="content c3">'+
                     '<div class="box box3">'+
                        '<p class="title"><a href="topics.php">Topics We Covered</a></p>'+
                        '<div class="ul-box">'+
                            '<div class="item-ul">'+
                                '<li><a href="#" >Neo-Liberalism </a></li>'+
                                '<li><a href="#">Constitution</a></li>'+
                                '<li><a href="#">Gender equality</a></li>'+
                                '<li><a href="#">Education for all</a></li>'+
                                '<li><a href="#">Public Health</a></li>'+
                                '<li><a href="#">Agriculture</a></li>'+
                            '</div>'+
                            '<div class="item-ul">'+
                                '<li><a href="#" >MSME </a></li>'+
                                '<li><a href="#">Public Transport</a></li>'+
                                '<li><a href="#">Rural Employment</a></li>'+
                                '<li><a href="#">Environment and Climate Change</a></li>'+
                                '<li><a href="#">History and Culture</a></li>'+
                                '<li><a href="#">Anthropocene</a></li>'+
                            '</div>'+
                            '<div class="item-ul">'+
                                '<li><a href="#" >Geology </a></li>'+
                                '<li><a href="#">Nano-Technology</a></li>'+
                                '<li><a href="#">Artificial Intelligence</a></li>'+
                                '<li><a href="#">Water Resources</a></li>'+
                                '<li><a href="#">Urbanisation</a></li>'+
                                '<li><a href="#">Land</a></li>'+
                            '</div>'+
                            '<div class="item-ul">'+
                                '<li><a href="#" >Center - State Relations</a></li>'+
                                '<li><a href="#">Economic Theory</a></li>'+
                                '<li><a href="#">Indian Banking</a></li>'+
                                '<li><a href="#">Political Theory</a></li>'+
                                '<li><a href="#">Population and Demography</a></li>'+
                                '<li><a href="#">Religion</a></li>'+
                            '</div>'+
                            '<div class="item-ul">'+
                            '<li><a href="#" >Judicial Reforms</a></li>'+
                            '<li><a href="#">Electoral Reforms</a></li>'+
                            '<li><a href="#">International Relations</a></li>'+
                            '<li><a href="#">Globalisation</a></li>'+
                            '<li><a href="#">Inequality</a></li>'+
                            '<li><a href="#">Social Justice</a></li>'+
                            '<li><a href="#">Dynamic Integration</a></li>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
var joinOurNetwork =  '<div class="content">'+
                         '<div class="box">'+
                            '<div class="left-box">'+
                                '<p class="title"><a href="join-our-network.php">Join Our Network</a></p>'+
                                '<p class="describe">Be a part of a growing community interested in understanding complex issues and connect with intellectuals and experts from across the country and gobally. Registered members shall receive important updates along with publications from TJV.</p>'+
                            '</div>'+
                            '<div class="right-box">'+
                                '<ul>'+
                                    '<li><a href="join-community.php">Join Our Community</a></li>'+
                                    '<li><a href="contact.php">Contact us</a></li>'+
                                    '<li><a href="#">facebook</a></li>'+
                                    '<li><a href="#">Twitter</a></li>'+
                                    '<li><a href="#">Instagram</a></li>'+
                                    '<li><a href="#">Youtube</a></li>'+
                                    '<li><a href="#">Telegram</a></li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
var events = '<div class="content">'+
              '<div class="box">'+
                '<div class="left-box">'+
                    '<p class="title"><a href="events.php">Events</a></p>'+
                    '<p class="describe">TJV conducts webinars, seminars and meetings every Sunday on contemporary issues facing the global society by inviting top subject experts, writers, professors to share their knowledge and to bridge the gap between the academia and the public.</p>'+
                '</div>'+
                '<div class="right-box">'+
                    '<ul>'+
                        '<li><a href="webinars.php">Webinars</a></li>'+
                        '<li><a href="seminars.php">Seminars</a></li>'+
                        '<li><a href="meetings.php">Meetings</a></li>'+
                    '</ul>'+
                '</div>'+
              '</div>'+
            '</div>';
$(".navc").change(function() {
    $(".navc").not(this).prop('checked', false);
});
$('.navc').on('click', function() {
    var contentType = $(this).data('content');
    if ($(this).is(':checked')){
        if (contentType === "whoweare") {
            $('.nav-container').html(whoweare);
        } else if (contentType === "events") {
            $('.nav-container').html(events);
        } else if (contentType === "academicactivity") {
            $('.nav-container').html(academicActivity);
        } else if (contentType === "joinournetwork") {
            $('.nav-container').html(joinOurNetwork);
        } else if (contentType === "topicscovered") {
            $('.nav-container').html(topicsCovered);
        }
        $('.content').slideToggle("slow");
    } else {
        $('.content').slideToggle("slow");
    }
});