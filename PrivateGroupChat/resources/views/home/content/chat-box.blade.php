        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">Chat</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <div class="page-body">
          <div class="container-xl flex-fill d-flex flex-column">
            <div class="card flex-fill">
              <div class="row g-0 flex-fill">
                <div class="col-12 col-lg-5 col-xl-3 border-end d-flex flex-column">
                  <div class="card-header d-none d-md-block">
                    <div class="input-icon">
                      <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                          <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                          <path d="M21 21l-6 -6"></path>
                        </svg>
                      </span>
                      <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search">
                    </div>
                  </div>
                  <div class="card-body p-0 scrollable flex-fill">
                    <div class="nav flex-column nav-pills" role="tablist">
                      <a href="#chat-1" class="nav-link text-start mw-100 p-3 active" id="chat-1-tab" data-bs-toggle="pill" role="tab" aria-selected="true">
                        <div class="row align-items-center flex-fill">
                          <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span></div>
                          <div class="col text-body">
                            <div>Paweł Kuna</div>
                            <div class="text-secondary text-truncate w-100">Sure Paweł, let me pull the latest updates.</div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-9 d-flex flex-column">
                  <div class="card-body scrollable">
                    <div class="chat">
                      <div class="chat-bubbles">

                        <div class="chat-item">
                          <div class="row align-items-end">
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span></div>
                            <div class="col col-lg-6">
                              <div class="chat-bubble">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Emmy Levet</div>
                                    <div class="col-auto chat-bubble-date">09:43</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>The commit message is descriptive, too. Good job on mentioning the issue number it fixes.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end">
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/003m.jpg)"> </span></div>
                            <div class="col col-lg-6">
                              <div class="chat-bubble">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Dunn Slane</div>
                                    <div class="col-auto chat-bubble-date">09:44</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>
                                    I noticed you added some new dependencies in the <code>package.json</code>. Did you also update the <code>README</code> with
                                    the setup instructions?
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end justify-content-end">
                            <div class="col col-lg-6">
                              <div class="chat-bubble chat-bubble-me">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Paweł Kuna</div>
                                    <div class="col-auto chat-bubble-date">09:45</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>Oops, I forgot. I'll add that right away.</p>
                                  <div class="mt-2">
                                    <img src="https://media3.giphy.com/media/VABbCpX94WCfS/giphy.gif" alt="" class="rounded img-fluid">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span></div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end">
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/002m.jpg)"> </span></div>
                            <div class="col col-lg-6">
                              <div class="chat-bubble">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Mallory Hulme</div>
                                    <div class="col-auto chat-bubble-date">09:46</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>
                                    I see a couple of edge cases we might not be handling in the <code>calculateStatistic</code> function. Should I open an
                                    issue for that?
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end justify-content-end">
                            <div class="col col-lg-6">
                              <div class="chat-bubble chat-bubble-me">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Paweł Kuna</div>
                                    <div class="col-auto chat-bubble-date">09:47</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>Yes, Bob. Please do. We should not forget to handle those.</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span></div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end">
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span></div>
                            <div class="col col-lg-6">
                              <div class="chat-bubble">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Emmy Levet</div>
                                    <div class="col-auto chat-bubble-date">09:50</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>Alright, once the <code>README</code> is updated, I'll merge this commit into the main branch. Nice work, Paweł.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end justify-content-end">
                            <div class="col col-lg-6">
                              <div class="chat-bubble chat-bubble-me">
                                <div class="chat-bubble-title">
                                  <div class="row">
                                    <div class="col chat-bubble-author">Paweł Kuna</div>
                                    <div class="col-auto chat-bubble-date">09:52</div>
                                  </div>
                                </div>
                                <div class="chat-bubble-body">
                                  <p>Thanks, <a href="#">@everyone</a>! 🙌</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000m.jpg)"> </span></div>
                          </div>
                        </div>
                        <div class="chat-item">
                          <div class="row align-items-end">
                            <div class="col-auto"><span class="avatar avatar-1" style="background-image: url(./static/avatars/000f.jpg)"> </span></div>
                            <div class="col-auto">
                              <div class="chat-bubble">
                                <div class="chat-bubble-body">
                                  <p class="text-secondary text-italic">typing<span class="animated-dots"></span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="input-group input-group-flat">
                      <input type="text" class="form-control" autocomplete="off" placeholder="Type message">
                      <span class="input-group-text">
                        <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Clear search" data-bs-original-title="Clear search">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mood-smile -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M9 10l.01 0"></path>
                            <path d="M15 10l.01 0"></path>
                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path>
                          </svg>
                        </a>
                        <a href="#" class="link-secondary ms-2" data-bs-toggle="tooltip" aria-label="Add notification" data-bs-original-title="Add notification">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/paperclip -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                            <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE BODY -->
        <!--  BEGIN FOOTER  -->
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="https://docs.tabler.io" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-pink icon-inline icon-4">
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                      </svg>
                      Sponsor
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright © 2025
                    <a href="." class="link-secondary">Tabler</a>. All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener"> v1.4.0 </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!--  END FOOTER  -->
