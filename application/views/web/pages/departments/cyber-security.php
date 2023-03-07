<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <?php $i = 0;
                  foreach ($departmentTabs["cyber"] as $deptKey => $deptValue) {
                     $i++; ?>
                     <button class="nav-link <?= ($i == 1) ? 'active' : '' ?>" id="v-pills-<?= $deptKey; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $deptKey; ?>" type="button" role="tab" aria-controls="v-pills-<?= $deptKey; ?>" aria-selected="true" onclick="scrollToDeptSection(this)">
                        <?= strtoupper($deptValue); ?>
                     </button>
                  <?php } ?>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel" aria-labelledby="v-pills-overview-tab">
                     <div>
                        <h2 class="title">Cyber Security</h2>
                        <div class="dept-content">
                           <p>
                              B. Tech in Cyber security is an academic program that teaches us how to protect computer operating systems, networks, and data from cyber attacks. Here we learn how to monitor systems and mitigate threats when they occur. This is an oversimplification of IT security degrees’ curricula.
                           </p>
                           <p>
                              Cyber security course is important for Students who are interested in learning how to protect the data and systems from hackers and other cyber-attacks. This program is a perfect career for computer science enthusiasts because of the financial stability and the opportunities to explore. Lifelong learning opportunities are also provided by this program.
                           </p>
                           <p>
                              With the shifting of global business environment towards cloud data storage and online management, the demand for cyber security is at an all-time high. With the increase in internet exposure, commercial organizational data and the personal data of users the demand for cyber security experts is increasing day by day.
                           </p>
                           <p>
                              In this course student learn about Information and Network Security, Ethical Hacking, Cyber Security landscape, Cyber forensic, IT ACTs and use of relevant tools to assess and manage security protocols in information processing systems.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-scope" role="tabpanel" aria-labelledby="v-pills-scope-tab">
                     <div>
                        <h2 class="title">Scope and Opportunities</h2>
                        <div class="dept-content">
                           <p>
                              Data Security Council of India (DSCI), which is one of the top associations for cyber security has predicted that the cyber security market will employ around 10 lacks employees by 2025.
                           </p>
                           <p>
                              According to the senior director of NASSCOM, while the government’s initiatives such as Digital India and demonetization have pushed companies towards digital transformation, doing so has also made them vulnerable to cyber-attacks. In turn, this has led to a demand for cyber security professionals who can help companies achieve digital transformation without compromising security.
                           </p>
                           <p>
                              According to a report from PricewaterhouseCoopers, India’s cyber security market is predicted to grow from USD 1.97 billion in 2019 to USD 3.05 billion by 2022, with a rate one and a half times than the global rate.
                           </p>
                           <p>
                              Despite having the most extensive IT talent pool in the world, today, India severely lacks skilled cyber security professionals. This acute shortage has resulted in companies’ willingness to pay a premium salary to cyber security professionals. According to some reports, the average cyber security experts’ salaries in India have grown to INR. 8.8 lacks.
                           </p>
                           <p>
                              According to a report by the National Association of Software and Services Companies, there is a shortage of 1 million cyber security personnel to deal with cyber threats. As a result, there has never been a better time for any young person wishing to build a name for themselves in this field.
                           </p>
                           <p>
                              Without a doubt, the job market is growing and will continue to grow in the coming years. According to the Bureau of Labor Statistics, demand for Information Security Analysts is expected to grow by 37% in coming years.
                           </p>
                           <p>
                              In India, the requirement for cyber security professionals by 2022 is 1.8 million. Evidently, this current shortage of cyber security professionals in the country will lead to more job openings in the near future.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-eligibility" role="tabpanel" aria-labelledby="v-pills-eligibility-tab">
                     <div>
                        <h2 class="title">Eligibility</h2>
                        <div class="dept-content">
                           <p>
                              JEE Exam & Online Counseling- The candidate from MP must have passed 10+2 Exam from Madhya Pradesh Board or any other Board with Physics, Chemistry as the main subjects and Mathematics/ Biology/ Biotechnology as one of the optional subjects, with minimum 45% marks for General category candidates and 40% in case of SC/ST candidate.
                           </p>
                           <p>
                              The candidate from other states must have passed 10+2 Exam from any recognized board with Physics, Chemistry as the main subjects and Mathematics/ Biology/ Biotechnology as one of the optional subjects, with 45% marks for General category candidates as well as SC/ST candidate. The candidate who has not given JEE exam but fulfils above criteria may also go for online counselling in the 2nd phase of counselling. Direct Admissions based on 12th results (College level Counseling)- The Candidate must have passed 10+2 Exam from Madhya Pradesh Board or any other Board with Physics, Chemistry as the main subjects and Mathematics/ Biology/ Biotechnology as one of the optional subjects, with minimum 50% marks for General category candidates and 45% in case of SC/ST candidate.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
                     <div>
                        <h2 class="title">Frequently Asked Questions(FAQs)</h2>
                        <div class="space-y-4">
                           <div class="space-y-1">
                              <p class="font-bold mb-0">1). What is intake for B.Tech in Cyber Security?</p>
                              <p class="mb-0">The Intake for B.Tech in Cyber Security is 30 students.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">2). Is cyber Security in demand?</p>
                              <p class="mb-0">In India, cyber security is among the fastest growing sectors and will continue to grow at a higher rate.</p>
                           </div>
                           <div class="space-y-2">
                              <p class="font-bold mb-0">3). What is the salary of a cyber security engineer in India?</p>
                              <p class="mb-0">In India, a cyber security engineer salary is estimated around INR 3 Lac to INR 21 Lacks in a month, as per experience and expertise. The average annual salary might go up to INR 7 lacks.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">4). Is coding required for cyber security?</p>
                              <p class="mb-0">Coding might not be mandatory for entry-level cyber security professionals. However, it is required in the mid-level and upper-level posts of this domain.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">5). Is networking required for cyber security?</p>
                              <p class="mb-0">Yes, an in-depth understanding of networking is required to start a career in cyber security.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">6). What are the highest paying Cyber security Jobs in India?</p>
                              <p class="mb-0">Some of the highest paying cyber security jobs in India are Cyber Security Analysts, Security Architects, Network Security Engineers etc.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">7). What are the job profile options provided by Cyber Security course?</p>
                              <p class="mb-0">Some of the Job Profile options are:</p>
                              <ul class="list-group">
                                 <li class="list-group-item">Network Security Engineer</li>
                                 <li class="list-group-item">Cyber Security Analyst</li>
                                 <li class="list-group-item">Security Architect</li>
                                 <li class="list-group-item">Cyber Security Manager</li>
                                 <li class="list-group-item">Chief Information Security Officer (CISO)</li>
                                 <li class="list-group-item">Information Security Manager</li>
                                 <li class="list-group-item">Cyber security Engineer</li>
                                 <li class="list-group-item">Application Security Engineer</li>
                                 <li class="list-group-item">Ethical Hackers</li>
                                 <li class="list-group-item">Incident Manager</li>
                                 <li class="list-group-item">Cyber security Consultant</li>
                                 <li class="list-group-item">Cloud Security Engineer</li>
                                 <li class="list-group-item">Cyber Forensic experts</li>
                                 <li class="list-group-item">Cryptographer</li>
                              </ul>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">8). What are the Top Companies that provide jobs in Cyber security?</p>
                              <p class="mb-0">Some of the top recruiters are:</p>
                              <ul class="list-group">
                                 <li class="list-group-item">Deloitte</li>
                                 <li class="list-group-item">TCS</li>
                                 <li class="list-group-item">Infosys</li>
                                 <li class="list-group-item">Cognizant</li>
                                 <li class="list-group-item">PwC</li>
                                 <li class="list-group-item">Wipro</li>
                                 <li class="list-group-item">EY</li>
                                 <li class="list-group-item">Booz Allen Hamilton</li>
                                 <li class="list-group-item">Jacobs</li>
                                 <li class="list-group-item">KPMG</li>
                                 <li class="list-group-item">VMware</li>
                                 <li class="list-group-item">Accenture</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>