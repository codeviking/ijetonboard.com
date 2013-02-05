<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title             = 'Data Services';
    $active_parent     = 'Airlines';
    $active_page_title = 'Data Services';

$extra_styles = <<<EOF
    #data-services li {
        margin: 20px 0;
    }
    #data-services li img {
        margin-right: 20px;
    }
    #data-services li div {
        width: 840px;
    }
    #data-services > li:last-child {
        margin-bottom: 0;
    }
EOF;

    $heroes = array('hero_we_are_ijet.jpg');

    include_once WEB_ROOT . '/templates/head.php';

?>
<section>
    <h1>Data Services</h1>
    <p>
        iJet's Data Services provide airlines and third-party developers with access to aircraft data as soon as it streams off an airplane. The following are examples of Data Services supported by iJet's Platform.  Airlines and their developers can also configure customized services to address other challenges in the operations or business domain.
    </p>
    <ul id="data-services">
        <li class="clearafter">
            <img src="<?= BASE_URL; ?>static/images/data-services-1.png" width="100" class="float-left">
            <div class="float-left">
                <strong>AIRCRAFT DEPARTURES AND ARRIVAL MONITORING</strong><br>
            Gathers and displays real-time progress information to pilots and airport operations personnel of all pre-departure processes including: baggage loading, passenger boarding, catering and fueling to better ensure on-time aircraft departures.  It is designed improve coordination for after gate departures and reduce fuel usage both in flight and on the ground. 
</div>
        </li>
        <li class="clearafter">
            <img src="<?= BASE_URL; ?>static/images/data-services-2.png" width="100" class="float-left">
            <div class="float-left">
                <strong>AIRCRAFT WEATHER REPORTING</strong><br>
            Gathers available atmospheric observations from onboard the airplane as it travels around the globe, sending a steady transmission of data to the ground for use by AOCs and outside weather providers.  This provides a revenue opportunity for sales of data to weather agencies as well as a savings opportunity through more accurate flight planning capabilities.
</div>
        </li>
        <li class="clearafter">
            <img src="<?= BASE_URL; ?>static/images/data-services-3.png" width="100" class="float-left">
            <div class="float-left">
                <strong>FLIGHT TRACKER</strong><br>
            Tracks aircraft position regardless of radar contact or jurisdiction of airspace. Captured data includes a variety of metrics for both a real-time display and post flight data analysis.  Flight plan compliance (both altitude and speed) is a critical component of efficient operations.  This data service provides an easy to use tool to measure the operational compliance.
</div>
        </li>
        <li class="clearafter">
            <img src="<?= BASE_URL; ?>static/images/data-services-4.png" width="100" class="float-left">
            <div class="float-left">
                <strong>FOQA DATA STREAMING</strong><br>
            Allows airlines to automatically capture, analyze and visualize data generated by an aircraft while in flight. Data collected is used by airlines to analyze performance, identify trends, investigate minor incidents, and review procedural and regulatory compliance.  The manual nature of most FOQA retrieval processes are rendered obsolete through our system, saving manpower while making data available for analysis on a more rapid time schedule.
</div>
        </li>
    </ul>
</section>
<?php

include_once WEB_ROOT . '/templates/foot.php';
