
  <style>
    .featured-services .icon-box:hover::before {
        background: {{$page->alt1}};
        top: 0;
        border-radius: 0px;
    }
    .featured-services .icon i {
        color: {{$page->alt1}};
        font-size: 48px;
        line-height: 1;
        transition: all 0.3s ease-in-out;
    }
    .main-timeline{ font-family: 'Poppins', sans-serif; }
    .main-timeline:after{
        content: '';
        display: block;
        clear: both;
    }
    .main-timeline .timeline{
        width: calc(50% + 58px);
        border-top: 2px solid #404247;
        float: left;
        position: relative;
        z-index: 1;
    }
    .main-timeline .timeline:before{
        content: "";
        background: #404247;
        width: 10px;
        height: 10px;
        border-radius: 50px;
        position: absolute;
        top: -5px;
        right: 0;
    }
    .main-timeline .timeline-content{
        color: #f4f5f7;
        text-align: center;
        padding: 15px 80px 15px 10px;
        display: block;
        position: relative;
    }
    .main-timeline .timeline-content:hover{ text-decoration: none; }
    .main-timeline .timeline-content:before{
        content: "";
        background: #00a6f9;
        width: 15px;
        height: 100%;
        position: absolute;
        top: 0;
        right: 50px;
    }
    .main-timeline .timeline-year{
        font-size: 35px;
        line-height: 35px;
        font-weight: 700;
        transform: translateY(-50%) rotate(90deg);
        position: absolute;
        top: 50%;
        right: -15px;
    }
    .main-timeline .title{
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }
    .main-timeline .description{
        font-size: 16px;
        margin: 0;
    }
    .main-timeline .timeline:nth-child(even){ float: right; }
    .main-timeline .timeline:nth-child(even):before{
        right: auto;
        left: 0;
    }
    .main-timeline .timeline:nth-child(even) .timeline-content{
        padding: 15px 10px 15px 80px;
    }
    .main-timeline .timeline:nth-child(even) .timeline-content:before{
        right: auto;
        left: 51px;
    }
    .main-timeline .timeline:nth-child(even) .timeline-year{
        right: auto;
        left: -15px;
    }
    .main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ background: #ff3e7c; }
    .main-timeline .timeline:nth-child(4n+3) .timeline-content:before{ background: #7438be; }
    .main-timeline .timeline:nth-child(4n+4) .timeline-content:before{ background: #bdc203; }
    .main-timeline .timeline:nth-child(4n+5) .timeline-content:before{ background: #0356c2; }
    .main-timeline .timeline:nth-child(4n+6) .timeline-content:before{ background: #05af21; }
    .main-timeline .timeline:nth-child(4n+7) .timeline-content:before{ background: #c22003; }
    .main-timeline .timeline:nth-child(4n+8) .timeline-content:before{ background: #383836; }
    @media screen and (max-width:767px){
        .main-timeline .timeline{ width: 100%; }
    }
  </style>
