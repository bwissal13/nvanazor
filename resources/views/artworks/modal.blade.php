 
    <div class="cs-modal_wrap" id="bid_1">
        <div class="cs-modal_overlay"></div>
        <div class="cs-modal_container">
            <div class="cs-modal_container_in">
                <div class="cs-modal_close cs-center">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9649 2.54988C12.3554 2.15936 12.3554 1.52619 11.9649 1.13567C11.5744 0.745142 10.9412 0.745142 10.5507 1.13567L11.9649 2.54988ZM0.550706 11.1357C0.160181 11.5262 0.160181 12.1594 0.550706 12.5499C0.94123 12.9404 1.5744 12.9404 1.96492 12.5499L0.550706 11.1357ZM1.96492 1.13567C1.5744 0.745142 0.94123 0.745142 0.550706 1.13567C0.160181 1.52619 0.160181 2.15936 0.550706 2.54988L1.96492 1.13567ZM10.5507 12.5499C10.9412 12.9404 11.5744 12.9404 11.9649 12.5499C12.3554 12.1594 12.3554 11.5262 11.9649 11.1357L10.5507 12.5499ZM10.5507 1.13567L0.550706 11.1357L1.96492 12.5499L11.9649 2.54988L10.5507 1.13567ZM0.550706 2.54988L10.5507 12.5499L11.9649 11.1357L1.96492 1.13567L0.550706 2.54988Z"
                            fill="currentColor" />
                    </svg>
                </div>

                <div class="cs-bid_card">
                    <h2 class="cs-title_title">more</h2>
                    <div class="cs-bid_info">
                        <ul>
                            <li>
                                <span>{{ $artwork->title }}</span>
                                <b>{{ $artwork->price }}</b>
                            </li>
                            <li>
                                <span>Current Bid</span>
                                <b>0.28ETH</b>
                            </li>
                        </ul>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-bid_form_head">
                            <span>{{ $artwork->description }}</span>
                            <span>Quantity 2 <span class="cs-accent_color">Available</span></span>
                        </div>
                        <div class="cs-bid_input_group">
                            <input type="text" class="cs-bid_value" placeholder="e.g ‘000.28’">
                            <input type="text" class="cs-bid_quantity" placeholder="1">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <ul>
                            <li>
                                <span>Service fee 25%</span>
                                <b>0.43ETH</b>
                            </li>
                        </ul>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <button class="cs-btn cs-style1 cs-btn_lg w-100"><span>Place a Bid</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    