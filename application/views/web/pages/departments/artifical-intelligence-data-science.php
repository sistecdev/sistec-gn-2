<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <?php $i = 0;
                  foreach ($departmentTabs["aids"] as $deptKey => $deptValue) {
                     $i++; ?>
                     <button class="nav-link <?= ($i == 1) ? 'active' : '' ?>" id="v-pills-<?= $deptKey; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $deptKey; ?>" type="button" role="tab" aria-controls="v-pills-<?= $deptKey; ?>" aria-selected="true" onclick="scrollToDeptSection(this)">
                        <?= strtoupper($deptValue); ?>
                     </button>
                  <?php } ?>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel" aria-labelledby="v-pills-overview-tab">
                     <div>
                        <h2 class="title">Artificial Intelligence and Data Science</h2>
                        <div class="dept-content">
                           <p class="font-bold">
                              Excel in Ever Evolving Tech World with our Newly Introduced Futuristic Courses.
                           </p>
                           <p>
                              B.Tech in Artificial Intelligence and Data Science is an academic program that teaches advanced innovations like how to emulate human intelligence in machines by imparting the knowledge of subfields like machine learning, analytics,and deep learning technologies. Artificial Intelligence is a good stream for students who are interested in coding, probability, statistics, and a desire to learn new algorithms and create new ones.This course prepares students for a career in a futuristic industry with high potential fields and demanding positions. Over the last few years, the demand for skills in Artificial Intelligence and Data Science has increased significantly. According to the LinkedIn Report of India and the United States in 2020 Artificial Intelligence Specialists, Machine Learning Engineers, Data Scientists, Data Engineer, are the top career options.
                           </p>
                           <p>
                              The Gartner study from 2019 showed that the Artificial Intelligence applications increased by 270% between 2015 and 2019. As a result, AI's popularity is only going to grow in the future. The number of Artificial Intelligence job openings is rapidly increasing. According to the World Economic Forum, automation would result in a net gain of 58 million jobs worldwide. According to the Skills-of-Mass-Disruption Report, over the next five years, the number of jobs requiring Artificial Intelligence or Machine Learning (AI/ML) skills will increase by 71%, with employers paying an average premium of $14,175 to eligible candidates.
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
                              <p class="font-bold mb-0">1). What is intake for B.Tech AI and DS?</p>
                              <p class="mb-0">The Intake for B.Tech AI and DS is 60 students.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">2). What are the eligibility criteria for B.Tech AI and DS?</p>
                              <p class="mb-0">Passed Standard XII (10+2) or equivalent examination with Physics and Mathematics as compulsory subjects along with one of the Chemistry/ Biotechnology/ Biology/ Technical Vocational subject/ Computer Science/ Information Technology/ Informatics Practices/ Agriculture/ Engineering Graphics/ Business Studies from any recognized Board with a minimum of 45% marks or equivalent grade (40% marks or equivalent grade for Scheduled Caste/ Scheduled Tribes).</p>
                           </div>
                           <div class="space-y-2">
                              <p class="font-bold mb-0">3). What is Data Science? Why it is so trendy these days?</p>
                              <p class="mb-0">Data Science is a blend of various tools, algorithms, and machine learning principles with the goal to discover hidden patterns from the raw data. Data Science is primarily used to make decisions and predictions making use of predictive causal analytics, prescriptive analytics (predictive plus decision science) and machine learning. Traditionally, the data that we had was mostly structured and small in size, which could be analyzed by using simple BI tools. Unlike data in the traditional systems which was mostly structured, today most of the data is unstructured or semi- structured.</p>
                              <p class="mb-0">
                                 This data is generated from different sources like financial logs, text files, multimedia forms, sensors, and instruments. Simple BI tools are not capable of processing this huge volume and variety of data. This is why we need more complex and advanced analytical tools and algorithms for processing, analyzing and drawing meaningful insights out of it.
                              </p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">4). Who is a Data Scientist?</p>
                              <p class="mb-0">In simple words, a Data Scientist is one who practices the art of Data Science. The term “Data Scientist” has been coined after considering the fact that a Data Scientist draws a lot of information from the scientific fields and applications whether it is statistics or mathematics.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">5). What all you need to be a Data Scientist?</p>
                              <p class="mb-0">A Data Scientist requires skills basically from three major areas as shown below.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">6). What are employment opportunities after completion of B.Tech AI and DS?</p>
                              <p class="mb-0">There are huge opportunities for different positions after successful completion of undergraduate and postgraduate programmes. Some of these opportunities are listed here a) Data Engineer b) Data Analyst c) Business Analyst d) Machine Learning Engineer e) Deep Learning Engineer f) Data Scientist g) AI Scientist</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">7). Any Industry Collaborations for B.Tech AI and DS?</p>
                              <p class="mb-0">Yes. We are in collaboration with NASSCOM under its Future Skills Program for conduction of few courses. Collaboration with other companies is also in progress.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">8). What are the possibilities of a placement in a good MNC company?</p>
                              <p class="mb-0">Some of the biggest recruiters of AI professionals in India are Deloitte, Dassault Systems, Merkle group, MuSigma, Absolute Data, IBM, Accenture, Amazon, LinkedIn, Citrix, Verizon, SAP Labs, NVidia, Tech Mahindra and Flipkart. SISTec is associated with eminent companies such as Dassault Systems, Amazon, Accenture, SAP Labs, MuSigma, Absolute Data,TCS, Adobe, Xalt, Praemineo, Prudent, Artech Solonics, Intuit CDK Global , and many more. So students have very good opportunities to get placed in such companies for their bright future endeavors.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">9). What is the salary of artificial intelligence and Data Scientist in India?</p>
                              <p class="mb-0">Artificial Intelligence Engineer salary for fresher in India starts at around Rs. 6 LPA and can stretch up to Rs. 15 LPA, with higher-end salaries usually offered by reputed companies like Amazon, Redbus Flipkart, Google, Facebook, etc. As for Data Scientist roles, the starting salary for freshers is generally Rs. 10 LPA, and it can go up to Rs. 12-15 LPA, depending upon the job role, skill set, and educational background. Candidates who have strong foundational knowledge in Data Science and a few years of work experience can earn as high as Rs. 20 LPA.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">10). What role AI and DS will play in empowering industries?</p>
                              <p class="mb-0">In recent times, with the advent of technologies such as Industry 4.0, Healthcare 4.0, smart cities, smart buildings, etc, AI has a major role to play in changing the functioning of current industries. However, decision making roles will still be handled by humans with the help of AI and DS tools.</p>
                           </div>
                           <div class="space-y-2">
                              <p class="font-bold mb-0">11). How B.Tech in CS and AI/DS are linked or different from each other?</p>
                              <p class="mb-0">Artificial Intelligence is a part of Computer Science. Also AI is a subset of Computer Science. The theories and practices of computer science are always used for developing Artificial Intelligence Systems. The key differences between Computer Science and Artificial Intelligence are: </p>
                              <ul>
                                 <li>1) CS is generic and wide concept whereas AI is an implementation.</li>
                                 <li>2) AI is one of many fields in Computer Science.</li>
                                 <li>3) AI is discipline belonging to CS.</li>
                              </ul>
                              <p>
                                 Both CS and AI have scopes in market today. But AI is the future and it would have more scope in coming days. If we talk about Data Science — It is more specific in terms of software Engineering, Statistics, and Domain Expertise with Logic. You find errors and the aggregate results can be dismay. Data Science needs you to have a solid foundation in mathematics and statistics. However, software engineering is usually the default route most people often fall victim of. But the degree definitely prepares you for the bigger picture. In a nutshell, the world needs software engineers as much as they need Data scientists and engineers. Both the job roles need to work symbiotically with each other.
                              </p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">12). How would you explain Data Scientist to a software engineer?</p>
                              <p class="mb-0">Software engineering is about developing programs or tools to automate tasks. Data science is the field of study that combines domain expertise, programming skills, and knowledge of mathematics and statistics to extract meaningful insights from data. In simple words, Data science is all about analyzing the data and making useful out of it. Software Knowledge plays vital role in this and make it useful by automation!</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">13). I have heard about AI. What is it exactly?</p>
                              <p class="mb-0">Artificial Intelligence (AI) is the concept of having machines “think like learning, and understanding language. While no one is expecting parity with human intelligence today or in the near future, AI has a big application in our day to day lives. The brain behind artificial intelligence is a technology called machine learning, which is designed to make our jobs easier and more productive.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">14). Whether the student will have an internship during this course?</p>
                              <p class="mb-0">Yes.</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">15). What are the key highlights of B.Tech AI and DS course at SISTec?</p>
                              <p class="mb-0">Certified Trainer Training by Industry (Bridging Industry Academia) Consultancy projects Latest Curriculum Internship</p>
                           </div>
                           <div class="space-y-1">
                              <p class="font-bold mb-0">16). Colleges Offering B.Tech. in AI & DS</p>
                              <p class="mb-0">IIT Hyderabad Indraprastha Institute of Information Technology, Delhi IIIT-Naya Raipur MS Ramaiah Institute of Technology Bangalore Cambridge Institute of Technology, Bangalore MVJ College of Engineering, Bangalore Lovely Professional University, Jalandhar Sharda University Great Lakes International University GH Raisoni College Jain University Amrita Vishwa Vidyapeetham</p>
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