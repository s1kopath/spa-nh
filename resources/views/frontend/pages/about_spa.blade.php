@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">About SPA</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">About Us</a>
                    </li>
                    <li class="active">About SPA</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 text-justify pad-10">
                    <div class="text-center">
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Times New Roman","serif";text-align:center;background:white;'><span style='font-size:36px;font-family:"Arial","sans-serif";color:#2E2C2D;'>Organization At A Glance</span></p>
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;text-align:center;font-size:15px;font-family:"Times New Roman","serif";'><strong><span style='font-size:24px;font-family:"Arial","sans-serif";color:green;border:none windowtext 1.0pt;padding:0in;'>SOCITY FOR PEOPLE&rsquo;S ADVANCEMENT (SPA)</span></strong></p>
                        <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;text-align:center;font-size:15px;font-family:"Times New Roman","serif";'><strong><span style='font-family:"Arial","sans-serif";border:none windowtext 1.0pt;padding:0in;'>(An Organization for Socio-Economic Development Specially for Women Children)</span></strong></p>
                    </div>
                    <br>
                    <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong>Society for People&rsquo;s Advancement (SPA)</strong> is a non-political, non-religious and nonprofit making non govt. voluntary development organization which established on 1<sup>st</sup> July, 1998 with the initiative of some young, enthusiastic, energetic social elites. From the authentic views, the organization stressed on improvement of health status, increase confidence of the target group stimulating their capacities, solid platform, knowledge and leadership, skill development, income generation through various employment schemes and activities to promote the socio-economic status of the disadvantaged women and children, particularly empower who are living on the street without help from anyone in different prospects. SPA intends to establish sustainable livelihoods for the disadvantaged women and children so that they can fight with poverty and injustice.&nbsp;</p>
                    <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong>Society for people&rsquo;s Advancement (SPA)&nbsp;</strong>is a Non-Govt. nation building voluntary organization. It has been adopting Participatory Project Planning for the identification of the absolute community problems and categories those for the innovative action research for a sustainable development of the&nbsp;<strong>SPA</strong> target families. To achieve a sustainable development, S<strong>PA</strong> developed its operational strategy as long-term development activities through the effective participation of the target families from grass root level.&nbsp;<strong>SPA</strong> developed its services for quality support, ensures facilities and took initiatives for the empowerment of the target families. Through awareness building, leadership development, education supports to increase the literacy rate, setting up various income generating project activities for economic rehabilitation &amp; socio-economic development of the poor; environment preservation, disaster mitigation, human resources and ensure training facilities on human skill development through group approach&nbsp;<strong>SPA</strong> has been trying for the social status changes.</p>
                </div>
                <div class="col-sm-12 col-md-12 text-center">
                    <img class="{{--img-thumbnail--}} img-circle" src="{{asset('public/frontend_resources/img/banner.jpg')}}" width="800"
                         height="570" alt="About SPA" title=""/>
                </div>
                <div class="col-sm-12 col-md-12 text-justify pad-10">
                    {{--------------------------}}
                    <div class="pad-20">
                        <h5>Mission:</h5>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">Society for people&rsquo;s Advancement (SPA) believes that man is the center of all development endeavors and is the maker of his/her own fortune. Accordingly, the development philosophy of the organization is based on the fact that the&nbsp;<strong>Paramount Need of People is Not Relief but Release</strong>. It feels to develop their dormant potentialities for the personal, social, economical, educational and active civic growth and development. It always keep a space in its consideration for making linkages with other like-minded organizations and also stresses to augment human dignity, social justice, fraternity and democratization in the process of development initiatives. &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">SPA follows non-directive, bottom-up and participatory development approach for the effective implementation of its programs. It emphasizes on people&rsquo;s participation in need assessment, planning, implementation and decision-making process for making the program socially accepted, people&rsquo;s oriented and sustainable. The organization acts as a facilitator to ensure people&rsquo;s active and equal participation in development process.<strong>&nbsp;</strong></p>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong>Firstly</strong>, it works with the poor people by forming the homogeneous group and therefore organizes the distressed and powerless people through rapport building, animation, motivation, and awareness.<strong>&nbsp;</strong></p>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong>Secondly</strong>, it empowers the powerless through education, training and sharing of experiences.<strong>&nbsp;</strong></p>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong>Thirdly,</strong> it facilitates in initiation of economic activities through micro-credit support for &nbsp; &nbsp; &nbsp;regular income and promoting economic rights and control over resources through active involvement and participation of the poor especially women with a view to alleviate poverty, hunger, illiteracy, ill-health &amp; civic inertia.</p>
                    </div>
                    <div class="pad-10">
                        <h5>Vision:</h5>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><span style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">The Vision of&nbsp;</span><strong style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">Society for people&rsquo;s Advancement (SPA)</strong><span style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">&nbsp;is&nbsp;</span><strong style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><em>&ldquo;To establish a society free from&nbsp;exploitation, oppression and depravation where every individual will be able to live in a &nbsp; peace and harmony with genuine human relation&rdquo;.</em></strong> </p>
                    </div>
                    <div class="pad-10">
                        <h5>Goal:</h5>
                        <p style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><strong style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><em>&ldquo;To improve Health &amp; Socio Economic Status of the target families through improvement of Health status, Education, Income Generation Activities, Disaster Mitigation, Increase Research &amp; Training facilities, Information dissemination &amp; Networking by the Effective Participation of the community people of&nbsp;</em></strong><span style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">SPA</span><strong style="color: rgb(0, 0, 0); font-size:15px;font-family:"Times New Roman","serif"; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><em>&nbsp;working areas.&rdquo;</em></strong> &nbsp;</p>                    </div>
                    <table style="width: 9.2e+2pt;border: none;margin-left:-22.5pt;background:white;border-collapse:collapse;">
                        <tbody>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>1.</span></p>
                            </td>
                            <td style="width:176.3pt;border:solid #DEDEDE 1.0pt;border-left:  none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Name of The Organization</span></p>
                            </td>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-left:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border:solid #DEDEDE 1.0pt;border-left:  none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Society for people&rsquo;s Advancement (SPA)</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>2.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Placed On</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>1998</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>3.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Registered under the Societies Registration Act, XXI of 19980 from the Joint Stock Companies, Dhaka, Bangladesh</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>S-2100(133)/99</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>4.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>NGO Affairs Bureau, Office of the Prime Minister, Govt. of the People&rsquo;s Republic of Bangladesh.</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>FDR No. 1744</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>5.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Registered under the District Cooperative, Dhaka under the Ministry of Co-operative, Govt. of the People&rsquo;s Republic of Bangladesh.</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Reg. No.630</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>6.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Affiliated with the Directorate of Family Planning, Dhaka. &nbsp; &nbsp;&nbsp;</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Affiliation No.10</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>7.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Ministry of Science &amp; Technology</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Ga-108</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>8.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Tax Payers Identification Number (TIN), Office of the Deputy Commissioner of Taxes, Taxes Circle-101, Taxes Zone-5, Dhaka &nbsp; &nbsp;</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>578-400-0051,&nbsp;</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Tax Circle-101</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>9.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Registered with PADOR-ESCAP- EuropeAid</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>ID No:</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>BD-2013-DQX-0704826785</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>10.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Phone Number</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>01834306277, 01676403980</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>11.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Email</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>spabd.org@gmail.com</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>12.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Website</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;"><br></td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>www.spabd.org</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>13.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Principles of the programming activity</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'>
                                    <ol style="margin-bottom:0in;list-style-type: decimal;">
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Utilization of local wisdom and resources</span></li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Encouragement of creativity and innovation</span></li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Searching utmost quality</span></li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Enhancing Cooperation, Coordination</span></li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Networking</span></li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>Accepting</span></li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>14.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Outsourcing related activities &amp; Trainings</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:#777777;'>&nbsp;</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Graphic Design, Web Design &amp; Development, SEO, SMM, CPA Marketing, Professional YouTube Marketing, Content Writing, Data Engineering, Software Testing, 3D Design &amp; Animation, PPC, CPC, Affiliate Marketing, Affiliate Marketing, Layer Masking and Object Removing etc.</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>15.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Total employment</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>10,000+ Freelancers</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>16.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Organization Funding</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Donation</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>17.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Head Office</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>House# 1029, Road# 9, Avenue# 9A, DOHS Mirpur-12, Dhaka-1216.</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>18.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>SPA Principal office</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>62, hasan nagor (1sr floor),</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>hazi missir ali road, abu syeed bazar,</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>kamrangirchar, Dhaka-1211.</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Telephone: +88-2-8631442</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Cell: 01719832483, 01833864366</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Email: info@spabd.org</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>19.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>SPA Liaison office</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>House # 22 (3rd floor), Road # 12</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Shekhertek PC Culture Housing Society</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Adabor, Dhaka-1207</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Cell: 01713489598,&nbsp;</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Teletalk: 01552435760</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Email: spa_dhaka@yahoo.com</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>20.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Project Office (District-Sunamganj)</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'>
                                    <ol style="margin-bottom:0in;list-style-type: decimal;">
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Madhubbir Market, Dharon Bazar, Upazila: Chatak, District: Sunamgonj, Bangladesh.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Upazila Road, Gonggiargor Bazar, Upazila: Sullna, District: Sunamgonj, Bangladesh.
                                            </span>
                                        </li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>21.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Project Office (District-Rajbari)</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'>
                                    <ol style="margin-bottom:0in;list-style-type: decimal;">
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Upazila Road, Upazila: Goalanda, District: Rajbari, Bangladesh.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Sonali Bank Complex, Narayonpur, Upazila Road, Upazila: Pangsha, District: Rajbari, Bangladesh.
                                            </span>
                                        </li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>22.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Project Office (District-</span> <span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Mymensingh)</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Court Road, Upazila: Ishwergonj,</span></p>
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>District: Mymensingh, Bangladesh</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:37.0pt;border:solid #DEDEDE 1.0pt;border-top:none;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>23.</span></p>
                            </td>
                            <td style="width:176.3pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>Membership/Partnership with other National and International bodies</span></p>
                            </td>
                            <td style="width:37.0pt;border-top:none;border-left:none;border-bottom:  solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:15px;font-family:"Arial","sans-serif";color:black;border:none windowtext 1.0pt;padding:0in;'>:</span></p>
                            </td>
                            <td style="width:668.95pt;border-top:none;border-left:none;border-bottom:solid #DEDEDE 1.0pt;border-right:solid #DEDEDE 1.0pt;padding:6.0pt .25in 6.0pt .25in;">
                                <div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'>
                                    <ol style="margin-bottom:0in;list-style-type: decimal;">
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Partner member of Youth For International Development-Global Youth Networks, 2013.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Federation of NGOs in Bangladesh (FNB) applied for 2012.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Department of Women Child Affairs (GoB) since 2012.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Coalition for Urban Poor (CUP) since 2010.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Prosika Manobik Unnayan Kendra since 2008.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Terre Des Hommes, Switzerland since 2009.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                WINROCK International since 2008.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Directorate of Primary Mass Education (GoB) since 2009.
                                            </span>
                                        </li>
                                        <li style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-family:"Arial","sans-serif";'>
                                                Office of the Civil Surgeon, Dhaka (GoB) since 2007.
                                            </span>
                                        </li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'>&nbsp;</p>

                    {{--------------------------}}
                </div>
            </div>
        </div>
    </section>

    {{--<section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/pages_image_folder/'.$aboutSpa->pages_image)}}" width="800" height="570" alt="{{$aboutSpa->pages_title}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>{{$aboutSpa->pages_title}}</h4>
                    <p>
                        <?= $aboutSpa->pages_content ?>
                    </p>
                </div>
            </div>
        </div>
    </section>--}}

@endsection
