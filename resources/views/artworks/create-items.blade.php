@extends('layouts.front-profile')
@section('content')

          <div class="cs-height_30 cs-height_lg_30"></div>
          <h2 class="cs-section_heading cs-style1">Create</h2>
          <div class="cs-height_25 cs-height_lg_25"></div>
          <form class="row" method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12">
              <div class="cs-file_wrap">
                <div class="cs-file_in">
                  <svg
                    width="46"
                    height="47"
                    viewBox="0 0 46 47"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M44.125 36.5H39.25V31.625C39.25 31.194 39.0788 30.7807 38.774 30.476C38.4693 30.1712 38.056 30 37.625 30C37.194 30 36.7807 30.1712 36.476 30.476C36.1712 30.7807 36 31.194 36 31.625V36.5H31.125C30.694 36.5 30.2807 36.6712 29.976 36.976C29.6712 37.2807 29.5 37.694 29.5 38.125C29.5 38.556 29.6712 38.9693 29.976 39.274C30.2807 39.5788 30.694 39.75 31.125 39.75H36V44.625C36 45.056 36.1712 45.4693 36.476 45.774C36.7807 46.0788 37.194 46.25 37.625 46.25C38.056 46.25 38.4693 46.0788 38.774 45.774C39.0788 45.4693 39.25 45.056 39.25 44.625V39.75H44.125C44.556 39.75 44.9693 39.5788 45.274 39.274C45.5788 38.9693 45.75 38.556 45.75 38.125C45.75 37.694 45.5788 37.2807 45.274 36.976C44.9693 36.6712 44.556 36.5 44.125 36.5Z"
                      fill="#737A99"
                    />
                    <path
                      d="M24.625 36.5H5.125C4.69402 36.5 4.2807 36.3288 3.97595 36.024C3.67121 35.7193 3.5 35.306 3.5 34.875V5.625C3.5 5.19402 3.67121 4.7807 3.97595 4.47595C4.2807 4.17121 4.69402 4 5.125 4H34.375C34.806 4 35.2193 4.17121 35.524 4.47595C35.8288 4.7807 36 5.19402 36 5.625V25.125C36 25.556 36.1712 25.9693 36.476 26.274C36.7807 26.5788 37.194 26.75 37.625 26.75C38.056 26.75 38.4693 26.5788 38.774 26.274C39.0788 25.9693 39.25 25.556 39.25 25.125V5.625C39.25 4.33207 38.7364 3.09209 37.8221 2.17785C36.9079 1.26361 35.6679 0.75 34.375 0.75H5.125C3.83207 0.75 2.59209 1.26361 1.67785 2.17785C0.763615 3.09209 0.25 4.33207 0.25 5.625V34.875C0.25 36.1679 0.763615 37.4079 1.67785 38.3221C2.59209 39.2364 3.83207 39.75 5.125 39.75H24.625C25.056 39.75 25.4693 39.5788 25.774 39.274C26.0788 38.9693 26.25 38.556 26.25 38.125C26.25 37.694 26.0788 37.2807 25.774 36.976C25.4693 36.6712 25.056 36.5 24.625 36.5Z"
                      fill="#737A99"
                    />
                    <path
                      d="M14.875 15.375C17.1187 15.375 18.9375 13.5562 18.9375 11.3125C18.9375 9.06884 17.1187 7.25 14.875 7.25C12.6313 7.25 10.8125 9.06884 10.8125 11.3125C10.8125 13.5562 12.6313 15.375 14.875 15.375Z"
                      fill="#737A99"
                    />
                    <path
                      d="M8.84625 20.7209L6.75 22.8334V33.2497H32.75V22.8334L25.7787 15.8459C25.6277 15.6936 25.448 15.5727 25.2499 15.4902C25.0519 15.4077 24.8395 15.3652 24.625 15.3652C24.4105 15.3652 24.1981 15.4077 24.0001 15.4902C23.802 15.5727 23.6223 15.6936 23.4713 15.8459L14.875 24.4584L11.1537 20.7209C11.0027 20.5686 10.823 20.4477 10.6249 20.3652C10.4269 20.2827 10.2145 20.2402 10 20.2402C9.78548 20.2402 9.57308 20.2827 9.37506 20.3652C9.17704 20.4477 8.99731 20.5686 8.84625 20.7209Z"
                      fill="#737A99"
                    />
                  </svg>
                  <h3>Drag and drop an image or <span>Upload</span></h3>
                  <p>high resulation image (jpeg, png, svg)</p>
                </div>
                <div class="cs-close_file" title="Close">
                  <svg
                    width="33"
                    height="33"
                    viewBox="0 0 33 33"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.421875"
                      y="0.163086"
                      width="32"
                      height="32"
                      rx="16"
                      fill="url(#paint0_linear_1353_4256)"
                    />
                    <path
                      d="M22.129 11.8702C22.5195 11.4797 22.5195 10.8465 22.129 10.456C21.7385 10.0655 21.1053 10.0655 20.7148 10.456L22.129 11.8702ZM10.7148 20.456C10.3242 20.8465 10.3242 21.4797 10.7148 21.8702C11.1053 22.2607 11.7385 22.2607 12.129 21.8702L10.7148 20.456ZM12.129 10.456C11.7385 10.0655 11.1053 10.0655 10.7148 10.456C10.3242 10.8465 10.3242 11.4797 10.7148 11.8702L12.129 10.456ZM20.7148 21.8702C21.1053 22.2607 21.7385 22.2607 22.129 21.8702C22.5195 21.4797 22.5195 20.8465 22.129 20.456L20.7148 21.8702ZM20.7148 10.456L10.7148 20.456L12.129 21.8702L22.129 11.8702L20.7148 10.456ZM10.7148 11.8702L20.7148 21.8702L22.129 20.456L12.129 10.456L10.7148 11.8702Z"
                      fill="white"
                    />
                    <defs>
                      <linearGradient
                        id="paint0_linear_1353_4256"
                        x1="0.421875"
                        y1="0.163086"
                        x2="38.7886"
                        y2="19.5877"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop offset="0" stop-color="#FC466B" />
                        <stop offset="1" stop-color="#3F5EFB" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                <input type="file" class="cs-file" accept="image/*" />
                <img
                  src="https://thememarch.com/"
                  class="cs-preview"
                  alt="Image"
                />
              </div>
              <div class="cs-height_25 cs-height_lg_25"></div>
              <div class="cs-large_radio_group">
                {{-- <div class="cs-large_radio">
                  <input type="radio" name="radio" checked />
                  <div class="cs-large_radio_in">
                    <svg
                      width="32"
                      height="33"
                      viewBox="0 0 32 33"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16 10.6818C12.7855 10.6818 10.1818 13.2855 10.1818 16.5C10.1818 19.7145 12.7855 22.3182 16 22.3182C19.2145 22.3182 21.8182 19.7145 21.8182 16.5C21.8182 13.2855 19.2145 10.6818 16 10.6818ZM29.0036 15.0455C28.6742 12.0958 27.3515 9.34587 25.2528 7.24719C23.1541 5.14851 20.4042 3.82584 17.4545 3.49636V0.5H14.5455V3.49636C11.5958 3.82584 8.84587 5.14851 6.74719 7.24719C4.64851 9.34587 3.32584 12.0958 2.99636 15.0455H0V17.9545H2.99636C3.32584 20.9042 4.64851 23.6541 6.74719 25.7528C8.84587 27.8515 11.5958 29.1742 14.5455 29.5036V32.5H17.4545V29.5036C20.4042 29.1742 23.1541 27.8515 25.2528 25.7528C27.3515 23.6541 28.6742 20.9042 29.0036 17.9545H32V15.0455H29.0036ZM16 26.6818C10.3709 26.6818 5.81818 22.1291 5.81818 16.5C5.81818 10.8709 10.3709 6.31818 16 6.31818C21.6291 6.31818 26.1818 10.8709 26.1818 16.5C26.1818 22.1291 21.6291 26.6818 16 26.6818Z"
                        fill="currentColor"
                      />
                    </svg>
                    <h5>Fixed Price</h5>
                  </div>
                </div> --}}
                {{-- <div class="cs-large_radio">
                  <input type="radio" name="radio" />
                  <div class="cs-large_radio_in">
                    <svg
                      width="36"
                      height="33"
                      viewBox="0 0 36 33"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask
                        id="path-1-outside-1_1353_4790"
                        maskUnits="userSpaceOnUse"
                        x="-0.140625"
                        y="-0.5"
                        width="36"
                        height="34"
                        fill="currentColor"
                      >
                        <rect
                          fill="white"
                          x="-0.140625"
                          y="-0.5"
                          width="36"
                          height="34"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M9.96474 0.645917C9.8481 0.728809 9.10053 1.50463 8.30355 2.37004C7.5065 3.23545 6.66011 4.15095 6.42268 4.40451L5.99101 4.86544L3.89642 2.77165L1.80182 0.677855H1.51451C1.27434 0.677855 1.195 0.713945 1.03109 0.897338C0.86296 1.08555 0.840128 1.15539 0.871129 1.38672C0.90454 1.63587 1.06818 1.81745 3.00295 3.75296L5.09855 5.84936L4.82437 6.13513C3.32274 7.70024 1.79995 9.41673 1.76888 9.57917C1.67648 10.0625 2.15468 10.4937 2.6134 10.3407C2.76137 10.2913 3.30941 9.74542 4.43167 8.52929L6.03808 6.78863L7.05897 7.80998L8.07985 8.83133L7.90704 9.25851C7.75598 9.63186 7.7371 9.76276 7.75712 10.2981C7.77687 10.8269 7.80968 10.9707 7.99702 11.351C8.25842 11.8815 8.73763 12.3519 9.27194 12.6023C9.60739 12.7595 9.73789 12.7818 10.3258 12.7818C10.9482 12.7818 11.0289 12.766 11.4412 12.5629C12.5146 12.0345 13.115 10.8907 12.9079 9.76845C12.6156 8.18393 11.018 7.23067 9.50729 7.73934L9.02494 7.90171L7.98477 6.86L6.94461 5.81829L8.60097 4.02507C9.51205 3.0388 10.286 2.22722 10.321 2.2216C10.356 2.21598 12.0042 3.95697 13.9836 6.09047L17.5826 9.96959L17.5858 20.5657L17.5891 31.1619L10.3411 31.1448L3.09308 31.1278L3.0596 23.2379L3.02612 15.348L2.83824 15.1864C2.57329 14.9584 2.25143 14.971 1.97263 15.2202L1.75395 15.4155V23.7098C1.75395 33.0093 1.71364 32.2839 2.23878 32.4298C2.40704 32.4765 5.10397 32.4998 10.3767 32.5C17.0416 32.5003 18.2983 32.4857 18.4908 32.4053C18.904 32.2326 18.9282 32.1092 18.9282 30.1774V28.4504L20.8867 30.4014C21.9638 31.4744 22.9162 32.3884 23.0029 32.4325C23.3958 32.6322 23.2684 32.7479 29.3572 26.6576C35.5686 20.4446 35.2829 20.7624 35.044 20.3324C34.938 20.1416 19.5227 4.26223 19.2478 4.06069C19.043 3.91051 19.0342 3.91004 16.4136 3.91004H13.7849L12.2593 2.26305C11.4202 1.35719 10.6622 0.58887 10.5749 0.55566C10.3296 0.46239 10.1949 0.482343 9.96474 0.645917ZM26.0474 12.9324L33.5183 20.6156L28.3995 25.7376L23.2807 30.8595L21.1045 28.684L18.9282 26.5086V24.8024V23.0962L20.8224 24.9861C22.6591 26.8186 22.7247 26.8761 22.9795 26.8761C23.2295 26.8761 23.2937 26.8247 24.2992 25.8192C25.2921 24.8263 25.3561 24.7469 25.3561 24.5084C25.3561 24.1401 25.0665 23.863 24.6816 23.863C24.4122 23.863 24.3644 23.8968 23.6868 24.5645L22.975 25.2659L20.9517 23.2417L18.9282 21.2175V18.5403V15.8632L20.0487 14.7412L21.1691 13.6194L24.8554 17.3016C28.5364 20.9786 28.542 20.9839 28.8185 20.9839C29.0186 20.9839 29.1524 20.9359 29.3013 20.8106C29.4771 20.6627 29.5074 20.5914 29.5074 20.3253V20.0132L25.505 16.0125L21.5027 12.0118H21.2081C20.9183 12.0118 20.8974 12.0278 19.9209 12.9965L18.9282 13.9812L18.9259 11.7745C18.9242 10.1709 18.9013 9.52861 18.8422 9.42423C18.7761 9.30746 17.0496 7.41507 15.3539 5.60069L15.0254 5.24917H16.8009H18.5765L26.0474 12.9324ZM10.8628 9.05764C11.193 9.20762 11.4676 9.52145 11.5601 9.85449C11.6463 10.1649 11.6463 10.243 11.5601 10.5534C11.2861 11.5402 9.93943 11.7919 9.31493 10.9732C9.16133 10.7718 9.11901 10.638 9.09631 10.2817L9.06819 9.83996L9.31359 10.0554C9.78195 10.4666 10.3919 10.2769 10.4698 9.69567C10.5019 9.45617 10.4796 9.39129 10.2914 9.17682L10.0762 8.93176L10.3341 8.93324C10.4761 8.93404 10.714 8.99002 10.8628 9.05764ZM1.96392 12.2552C1.61675 12.6024 1.75502 13.2196 2.20624 13.3366C2.68732 13.4612 3.0596 13.1886 3.0596 12.7117C3.0596 12.4742 3.02444 12.3958 2.85357 12.2521C2.57055 12.0139 2.20396 12.0152 1.96392 12.2552ZM10.047 15.6938C9.80277 15.7923 9.68828 16.0289 9.68828 16.4351V16.8113L9.32055 16.8936C8.59756 17.0554 7.99736 17.6485 7.77198 18.4239C7.6127 18.9718 7.66613 20.4284 7.86137 20.8618C8.05956 21.3015 8.4992 21.7526 8.93957 21.9681C9.2771 22.1333 9.40177 22.1542 10.1877 22.1781C11.5163 22.2185 11.63 22.3225 11.63 23.4978C11.63 24.3061 11.5484 24.5277 11.1876 24.6989C10.8897 24.8403 9.7559 24.8388 9.48111 24.6967C9.25272 24.5786 9.01931 24.2353 9.01898 24.0168C9.01831 23.6419 8.6994 23.3274 8.32002 23.3274C8.22675 23.3274 8.052 23.4154 7.93174 23.523C7.7292 23.7042 7.7136 23.748 7.72016 24.1153C7.73663 25.0364 8.41015 25.8336 9.378 26.0773L9.68828 26.1554V26.5523C9.68828 26.8825 9.71539 26.9762 9.84991 27.1107C10.3485 27.6093 11.0274 27.2077 11.0274 26.4143C11.0274 26.1493 11.0278 26.1489 11.4085 26.0382C11.9209 25.8893 12.3247 25.5985 12.5999 25.1803C12.9211 24.6924 12.9863 24.3534 12.9591 23.3157C12.9377 22.5013 12.9195 22.3904 12.7495 22.0444C12.5439 21.6257 12.189 21.2693 11.7502 21.0409C11.5064 20.914 11.3193 20.8855 10.5222 20.8538C9.76795 20.8239 9.54486 20.7923 9.39507 20.6941C9.08741 20.4924 9.00445 20.1895 9.02983 19.3603L9.05219 18.6299L9.30227 18.4008L9.55242 18.1717L10.3066 18.172C11.3392 18.1723 11.5363 18.3 11.6595 19.0482C11.7521 19.6112 12.4004 19.8105 12.7751 19.3911C13.0007 19.1386 13.0258 18.8557 12.8694 18.3288C12.6699 17.657 12.1209 17.1207 11.4222 16.9147L11.0433 16.8031L11.0068 16.4C10.9758 16.0579 10.939 15.9691 10.7634 15.8122C10.5519 15.6232 10.3177 15.5845 10.047 15.6938ZM21.573 17.0435C21.3639 17.1576 19.8007 18.7196 19.6936 18.9217C19.5374 19.2166 19.575 19.4345 19.8255 19.685C20.0756 19.9351 20.293 19.9729 20.5888 19.8178C20.8063 19.7036 22.3574 18.1369 22.4739 17.9136C22.7402 17.403 22.0813 16.7667 21.573 17.0435ZM23.5817 19.0522C23.3725 19.1662 21.8094 20.7283 21.7023 20.9303C21.5444 21.2283 21.5835 21.443 21.8427 21.7021C22.0519 21.9114 22.1069 21.9337 22.3259 21.8981C22.5332 21.8645 22.73 21.7011 23.5446 20.8866C24.4809 19.9502 24.5161 19.9051 24.5161 19.6392C24.5161 19.1596 23.9906 18.8295 23.5817 19.0522ZM26.5833 21.7511C26.322 21.8647 26.2265 22.033 26.2265 22.3796C26.2265 22.5947 26.2661 22.6792 26.4325 22.8192C26.5643 22.9302 26.7192 22.9926 26.8626 22.9926C27.0059 22.9926 27.1609 22.9302 27.2926 22.8192C27.4591 22.6792 27.4987 22.5947 27.4987 22.3796C27.4987 22.0274 27.4019 21.863 27.1272 21.7482C26.8549 21.6345 26.8513 21.6345 26.5833 21.7511Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.96474 0.645917C9.8481 0.728809 9.10053 1.50463 8.30355 2.37004C7.5065 3.23545 6.66011 4.15095 6.42268 4.40451L5.99101 4.86544L3.89642 2.77165L1.80182 0.677855H1.51451C1.27434 0.677855 1.195 0.713945 1.03109 0.897338C0.86296 1.08555 0.840128 1.15539 0.871129 1.38672C0.90454 1.63587 1.06818 1.81745 3.00295 3.75296L5.09855 5.84936L4.82437 6.13513C3.32274 7.70024 1.79995 9.41673 1.76888 9.57917C1.67648 10.0625 2.15468 10.4937 2.6134 10.3407C2.76137 10.2913 3.30941 9.74542 4.43167 8.52929L6.03808 6.78863L7.05897 7.80998L8.07985 8.83133L7.90704 9.25851C7.75598 9.63186 7.7371 9.76276 7.75712 10.2981C7.77687 10.8269 7.80968 10.9707 7.99702 11.351C8.25842 11.8815 8.73763 12.3519 9.27194 12.6023C9.60739 12.7595 9.73789 12.7818 10.3258 12.7818C10.9482 12.7818 11.0289 12.766 11.4412 12.5629C12.5146 12.0345 13.115 10.8907 12.9079 9.76845C12.6156 8.18393 11.018 7.23067 9.50729 7.73934L9.02494 7.90171L7.98477 6.86L6.94461 5.81829L8.60097 4.02507C9.51205 3.0388 10.286 2.22722 10.321 2.2216C10.356 2.21598 12.0042 3.95697 13.9836 6.09047L17.5826 9.96959L17.5858 20.5657L17.5891 31.1619L10.3411 31.1448L3.09308 31.1278L3.0596 23.2379L3.02612 15.348L2.83824 15.1864C2.57329 14.9584 2.25143 14.971 1.97263 15.2202L1.75395 15.4155V23.7098C1.75395 33.0093 1.71364 32.2839 2.23878 32.4298C2.40704 32.4765 5.10397 32.4998 10.3767 32.5C17.0416 32.5003 18.2983 32.4857 18.4908 32.4053C18.904 32.2326 18.9282 32.1092 18.9282 30.1774V28.4504L20.8867 30.4014C21.9638 31.4744 22.9162 32.3884 23.0029 32.4325C23.3958 32.6322 23.2684 32.7479 29.3572 26.6576C35.5686 20.4446 35.2829 20.7624 35.044 20.3324C34.938 20.1416 19.5227 4.26223 19.2478 4.06069C19.043 3.91051 19.0342 3.91004 16.4136 3.91004H13.7849L12.2593 2.26305C11.4202 1.35719 10.6622 0.58887 10.5749 0.55566C10.3296 0.46239 10.1949 0.482343 9.96474 0.645917ZM26.0474 12.9324L33.5183 20.6156L28.3995 25.7376L23.2807 30.8595L21.1045 28.684L18.9282 26.5086V24.8024V23.0962L20.8224 24.9861C22.6591 26.8186 22.7247 26.8761 22.9795 26.8761C23.2295 26.8761 23.2937 26.8247 24.2992 25.8192C25.2921 24.8263 25.3561 24.7469 25.3561 24.5084C25.3561 24.1401 25.0665 23.863 24.6816 23.863C24.4122 23.863 24.3644 23.8968 23.6868 24.5645L22.975 25.2659L20.9517 23.2417L18.9282 21.2175V18.5403V15.8632L20.0487 14.7412L21.1691 13.6194L24.8554 17.3016C28.5364 20.9786 28.542 20.9839 28.8185 20.9839C29.0186 20.9839 29.1524 20.9359 29.3013 20.8106C29.4771 20.6627 29.5074 20.5914 29.5074 20.3253V20.0132L25.505 16.0125L21.5027 12.0118H21.2081C20.9183 12.0118 20.8974 12.0278 19.9209 12.9965L18.9282 13.9812L18.9259 11.7745C18.9242 10.1709 18.9013 9.52861 18.8422 9.42423C18.7761 9.30746 17.0496 7.41507 15.3539 5.60069L15.0254 5.24917H16.8009H18.5765L26.0474 12.9324ZM10.8628 9.05764C11.193 9.20762 11.4676 9.52145 11.5601 9.85449C11.6463 10.1649 11.6463 10.243 11.5601 10.5534C11.2861 11.5402 9.93943 11.7919 9.31493 10.9732C9.16133 10.7718 9.11901 10.638 9.09631 10.2817L9.06819 9.83996L9.31359 10.0554C9.78195 10.4666 10.3919 10.2769 10.4698 9.69567C10.5019 9.45617 10.4796 9.39129 10.2914 9.17682L10.0762 8.93176L10.3341 8.93324C10.4761 8.93404 10.714 8.99002 10.8628 9.05764ZM1.96392 12.2552C1.61675 12.6024 1.75502 13.2196 2.20624 13.3366C2.68732 13.4612 3.0596 13.1886 3.0596 12.7117C3.0596 12.4742 3.02444 12.3958 2.85357 12.2521C2.57055 12.0139 2.20396 12.0152 1.96392 12.2552ZM10.047 15.6938C9.80277 15.7923 9.68828 16.0289 9.68828 16.4351V16.8113L9.32055 16.8936C8.59756 17.0554 7.99736 17.6485 7.77198 18.4239C7.6127 18.9718 7.66613 20.4284 7.86137 20.8618C8.05956 21.3015 8.4992 21.7526 8.93957 21.9681C9.2771 22.1333 9.40177 22.1542 10.1877 22.1781C11.5163 22.2185 11.63 22.3225 11.63 23.4978C11.63 24.3061 11.5484 24.5277 11.1876 24.6989C10.8897 24.8403 9.7559 24.8388 9.48111 24.6967C9.25272 24.5786 9.01931 24.2353 9.01898 24.0168C9.01831 23.6419 8.6994 23.3274 8.32002 23.3274C8.22675 23.3274 8.052 23.4154 7.93174 23.523C7.7292 23.7042 7.7136 23.748 7.72016 24.1153C7.73663 25.0364 8.41015 25.8336 9.378 26.0773L9.68828 26.1554V26.5523C9.68828 26.8825 9.71539 26.9762 9.84991 27.1107C10.3485 27.6093 11.0274 27.2077 11.0274 26.4143C11.0274 26.1493 11.0278 26.1489 11.4085 26.0382C11.9209 25.8893 12.3247 25.5985 12.5999 25.1803C12.9211 24.6924 12.9863 24.3534 12.9591 23.3157C12.9377 22.5013 12.9195 22.3904 12.7495 22.0444C12.5439 21.6257 12.189 21.2693 11.7502 21.0409C11.5064 20.914 11.3193 20.8855 10.5222 20.8538C9.76795 20.8239 9.54486 20.7923 9.39507 20.6941C9.08741 20.4924 9.00445 20.1895 9.02983 19.3603L9.05219 18.6299L9.30227 18.4008L9.55242 18.1717L10.3066 18.172C11.3392 18.1723 11.5363 18.3 11.6595 19.0482C11.7521 19.6112 12.4004 19.8105 12.7751 19.3911C13.0007 19.1386 13.0258 18.8557 12.8694 18.3288C12.6699 17.657 12.1209 17.1207 11.4222 16.9147L11.0433 16.8031L11.0068 16.4C10.9758 16.0579 10.939 15.9691 10.7634 15.8122C10.5519 15.6232 10.3177 15.5845 10.047 15.6938ZM21.573 17.0435C21.3639 17.1576 19.8007 18.7196 19.6936 18.9217C19.5374 19.2166 19.575 19.4345 19.8255 19.685C20.0756 19.9351 20.293 19.9729 20.5888 19.8178C20.8063 19.7036 22.3574 18.1369 22.4739 17.9136C22.7402 17.403 22.0813 16.7667 21.573 17.0435ZM23.5817 19.0522C23.3725 19.1662 21.8094 20.7283 21.7023 20.9303C21.5444 21.2283 21.5835 21.443 21.8427 21.7021C22.0519 21.9114 22.1069 21.9337 22.3259 21.8981C22.5332 21.8645 22.73 21.7011 23.5446 20.8866C24.4809 19.9502 24.5161 19.9051 24.5161 19.6392C24.5161 19.1596 23.9906 18.8295 23.5817 19.0522ZM26.5833 21.7511C26.322 21.8647 26.2265 22.033 26.2265 22.3796C26.2265 22.5947 26.2661 22.6792 26.4325 22.8192C26.5643 22.9302 26.7192 22.9926 26.8626 22.9926C27.0059 22.9926 27.1609 22.9302 27.2926 22.8192C27.4591 22.6792 27.4987 22.5947 27.4987 22.3796C27.4987 22.0274 27.4019 21.863 27.1272 21.7482C26.8549 21.6345 26.8513 21.6345 26.5833 21.7511Z"
                        fill="currentColor"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.96474 0.645917C9.8481 0.728809 9.10053 1.50463 8.30355 2.37004C7.5065 3.23545 6.66011 4.15095 6.42268 4.40451L5.99101 4.86544L3.89642 2.77165L1.80182 0.677855H1.51451C1.27434 0.677855 1.195 0.713945 1.03109 0.897338C0.86296 1.08555 0.840128 1.15539 0.871129 1.38672C0.90454 1.63587 1.06818 1.81745 3.00295 3.75296L5.09855 5.84936L4.82437 6.13513C3.32274 7.70024 1.79995 9.41673 1.76888 9.57917C1.67648 10.0625 2.15468 10.4937 2.6134 10.3407C2.76137 10.2913 3.30941 9.74542 4.43167 8.52929L6.03808 6.78863L7.05897 7.80998L8.07985 8.83133L7.90704 9.25851C7.75598 9.63186 7.7371 9.76276 7.75712 10.2981C7.77687 10.8269 7.80968 10.9707 7.99702 11.351C8.25842 11.8815 8.73763 12.3519 9.27194 12.6023C9.60739 12.7595 9.73789 12.7818 10.3258 12.7818C10.9482 12.7818 11.0289 12.766 11.4412 12.5629C12.5146 12.0345 13.115 10.8907 12.9079 9.76845C12.6156 8.18393 11.018 7.23067 9.50729 7.73934L9.02494 7.90171L7.98477 6.86L6.94461 5.81829L8.60097 4.02507C9.51205 3.0388 10.286 2.22722 10.321 2.2216C10.356 2.21598 12.0042 3.95697 13.9836 6.09047L17.5826 9.96959L17.5858 20.5657L17.5891 31.1619L10.3411 31.1448L3.09308 31.1278L3.0596 23.2379L3.02612 15.348L2.83824 15.1864C2.57329 14.9584 2.25143 14.971 1.97263 15.2202L1.75395 15.4155V23.7098C1.75395 33.0093 1.71364 32.2839 2.23878 32.4298C2.40704 32.4765 5.10397 32.4998 10.3767 32.5C17.0416 32.5003 18.2983 32.4857 18.4908 32.4053C18.904 32.2326 18.9282 32.1092 18.9282 30.1774V28.4504L20.8867 30.4014C21.9638 31.4744 22.9162 32.3884 23.0029 32.4325C23.3958 32.6322 23.2684 32.7479 29.3572 26.6576C35.5686 20.4446 35.2829 20.7624 35.044 20.3324C34.938 20.1416 19.5227 4.26223 19.2478 4.06069C19.043 3.91051 19.0342 3.91004 16.4136 3.91004H13.7849L12.2593 2.26305C11.4202 1.35719 10.6622 0.58887 10.5749 0.55566C10.3296 0.46239 10.1949 0.482343 9.96474 0.645917ZM26.0474 12.9324L33.5183 20.6156L28.3995 25.7376L23.2807 30.8595L21.1045 28.684L18.9282 26.5086V24.8024V23.0962L20.8224 24.9861C22.6591 26.8186 22.7247 26.8761 22.9795 26.8761C23.2295 26.8761 23.2937 26.8247 24.2992 25.8192C25.2921 24.8263 25.3561 24.7469 25.3561 24.5084C25.3561 24.1401 25.0665 23.863 24.6816 23.863C24.4122 23.863 24.3644 23.8968 23.6868 24.5645L22.975 25.2659L20.9517 23.2417L18.9282 21.2175V18.5403V15.8632L20.0487 14.7412L21.1691 13.6194L24.8554 17.3016C28.5364 20.9786 28.542 20.9839 28.8185 20.9839C29.0186 20.9839 29.1524 20.9359 29.3013 20.8106C29.4771 20.6627 29.5074 20.5914 29.5074 20.3253V20.0132L25.505 16.0125L21.5027 12.0118H21.2081C20.9183 12.0118 20.8974 12.0278 19.9209 12.9965L18.9282 13.9812L18.9259 11.7745C18.9242 10.1709 18.9013 9.52861 18.8422 9.42423C18.7761 9.30746 17.0496 7.41507 15.3539 5.60069L15.0254 5.24917H16.8009H18.5765L26.0474 12.9324ZM10.8628 9.05764C11.193 9.20762 11.4676 9.52145 11.5601 9.85449C11.6463 10.1649 11.6463 10.243 11.5601 10.5534C11.2861 11.5402 9.93943 11.7919 9.31493 10.9732C9.16133 10.7718 9.11901 10.638 9.09631 10.2817L9.06819 9.83996L9.31359 10.0554C9.78195 10.4666 10.3919 10.2769 10.4698 9.69567C10.5019 9.45617 10.4796 9.39129 10.2914 9.17682L10.0762 8.93176L10.3341 8.93324C10.4761 8.93404 10.714 8.99002 10.8628 9.05764ZM1.96392 12.2552C1.61675 12.6024 1.75502 13.2196 2.20624 13.3366C2.68732 13.4612 3.0596 13.1886 3.0596 12.7117C3.0596 12.4742 3.02444 12.3958 2.85357 12.2521C2.57055 12.0139 2.20396 12.0152 1.96392 12.2552ZM10.047 15.6938C9.80277 15.7923 9.68828 16.0289 9.68828 16.4351V16.8113L9.32055 16.8936C8.59756 17.0554 7.99736 17.6485 7.77198 18.4239C7.6127 18.9718 7.66613 20.4284 7.86137 20.8618C8.05956 21.3015 8.4992 21.7526 8.93957 21.9681C9.2771 22.1333 9.40177 22.1542 10.1877 22.1781C11.5163 22.2185 11.63 22.3225 11.63 23.4978C11.63 24.3061 11.5484 24.5277 11.1876 24.6989C10.8897 24.8403 9.7559 24.8388 9.48111 24.6967C9.25272 24.5786 9.01931 24.2353 9.01898 24.0168C9.01831 23.6419 8.6994 23.3274 8.32002 23.3274C8.22675 23.3274 8.052 23.4154 7.93174 23.523C7.7292 23.7042 7.7136 23.748 7.72016 24.1153C7.73663 25.0364 8.41015 25.8336 9.378 26.0773L9.68828 26.1554V26.5523C9.68828 26.8825 9.71539 26.9762 9.84991 27.1107C10.3485 27.6093 11.0274 27.2077 11.0274 26.4143C11.0274 26.1493 11.0278 26.1489 11.4085 26.0382C11.9209 25.8893 12.3247 25.5985 12.5999 25.1803C12.9211 24.6924 12.9863 24.3534 12.9591 23.3157C12.9377 22.5013 12.9195 22.3904 12.7495 22.0444C12.5439 21.6257 12.189 21.2693 11.7502 21.0409C11.5064 20.914 11.3193 20.8855 10.5222 20.8538C9.76795 20.8239 9.54486 20.7923 9.39507 20.6941C9.08741 20.4924 9.00445 20.1895 9.02983 19.3603L9.05219 18.6299L9.30227 18.4008L9.55242 18.1717L10.3066 18.172C11.3392 18.1723 11.5363 18.3 11.6595 19.0482C11.7521 19.6112 12.4004 19.8105 12.7751 19.3911C13.0007 19.1386 13.0258 18.8557 12.8694 18.3288C12.6699 17.657 12.1209 17.1207 11.4222 16.9147L11.0433 16.8031L11.0068 16.4C10.9758 16.0579 10.939 15.9691 10.7634 15.8122C10.5519 15.6232 10.3177 15.5845 10.047 15.6938ZM21.573 17.0435C21.3639 17.1576 19.8007 18.7196 19.6936 18.9217C19.5374 19.2166 19.575 19.4345 19.8255 19.685C20.0756 19.9351 20.293 19.9729 20.5888 19.8178C20.8063 19.7036 22.3574 18.1369 22.4739 17.9136C22.7402 17.403 22.0813 16.7667 21.573 17.0435ZM23.5817 19.0522C23.3725 19.1662 21.8094 20.7283 21.7023 20.9303C21.5444 21.2283 21.5835 21.443 21.8427 21.7021C22.0519 21.9114 22.1069 21.9337 22.3259 21.8981C22.5332 21.8645 22.73 21.7011 23.5446 20.8866C24.4809 19.9502 24.5161 19.9051 24.5161 19.6392C24.5161 19.1596 23.9906 18.8295 23.5817 19.0522ZM26.5833 21.7511C26.322 21.8647 26.2265 22.033 26.2265 22.3796C26.2265 22.5947 26.2661 22.6792 26.4325 22.8192C26.5643 22.9302 26.7192 22.9926 26.8626 22.9926C27.0059 22.9926 27.1609 22.9302 27.2926 22.8192C27.4591 22.6792 27.4987 22.5947 27.4987 22.3796C27.4987 22.0274 27.4019 21.863 27.1272 21.7482C26.8549 21.6345 26.8513 21.6345 26.5833 21.7511Z"
                        stroke="#737A99"
                        stroke-width="0.4"
                        mask="url(#path-1-outside-1_1353_4790)"
                      />
                    </svg>
                    <h5>For Bids</h5>
                  </div>
                </div> --}}
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
              <label for="title" class="cs-form_label">Title</label>
              <div class="cs-form_field_wrap">
                <input
                  type="text"
                  class="cs-form_field"
                  placeholder="e. g. 'NFT Art'"
                  id="title" name="title" value="{{ old('title') }}" required
                />
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
              <label for="price" class="cs-form_label" id="price" name="price" value="{{ old('price') }}" required>Item price</label>
              <div class="cs-form_field_wrap">
                <input
                  type="text"
                  class="cs-form_field"
                  placeholder="e. g. 20$"
                />
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
              <label class="cs-form_label">Select collection</label>
              <div class="cs-form_field_wrap cs-select_arrow">
                <select class="cs-form_field">
                  <option value="1">e. g. NFT music</option>
                  <option value="2">e. g. NFT art</option>
                  <option value="3">e. g. NFT video</option>
                </select>
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
              <label for="description" class="cs-form_label">Description</label>
              <div class="cs-form_field_wrap">
                <textarea
                  cols="30"
                  rows="5"
                  placeholder="e. g. Item description"
                  class="cs-form_field"
                  id="description" name="description"
                >{{ old('description') }}</textarea>
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
           
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-12">
            
              <div class="cs-height_30 cs-height_lg_30"></div>
              <button class="cs-btn cs-style1 cs-btn_lg" type="submit">
                <span>Submit Item</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    @endsection 