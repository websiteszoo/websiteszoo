import React, { useEffect, useState } from "react";
import Link from "next/link";
import Image from "next/image";
import Sal from "sal.js";
import styled from 'styled-components';
import TabData from "../../data/servicemenu.json";
import p1 from '../../public/images/service/002.png';
import p2 from '../../public/images/service/001.png';
import p3 from '../../public/images/service/003.png';
const rowstyle = {
  paddingLeft: "30px",
  paddingRight: "30px",
  '@media (max-width: 760px)': {
    paddingLeft: "10px",
    paddingRight: "10px",
  },
};

const mrowstyle = {
  '@media (max-width: 760px)': {
    paddingLeft: "10px",
    paddingRight: "10px",
  },
};

const colstyle = {
  textAlign: "center",
  marginTop: "30px",
  '@media (max-width: 760px)': {
    marginTop: "30px"
  },
};

const btnstyle = {
  fontSize: "20px",
};
const Home = () => {
  return (
    <>
      {/* Adjusted spacing, assuming these are for styling purposes */}
      <br /><br /><br /><br />
      {/* Wrapper div with className */}
      <div className="rainbow-cta-area rainbow-section-gap rainbow-section-gapBottom-big">
        <section class="py-6">
          <div class="container">
            <div class="text-center mb-5">
              <h2 class="fw-bold mb-2">產品無限，樂創精彩呈現</h2>
              <p class=" mb-0">以模組化思維與可靠雲端架構，讓你的服務快速上線、穩定成長。</p>
            </div>

            <div class="row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover rounded-4">
                  <div class="ratio ratio-1x1 rounded-top-4 overflow-hidden">
                    <Image src={p1} />
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title fw-bold">樂創預約</h5>
                    <p class="text-secondary mb-3">一對一預約為核心的輕量級排程系統，支援 LINE 通知、會員管理與加值金流。</p>
                    <div class="d-flex gap-2">
                      <a href="https://xn--qery78ceon.tw/" class="btn btn-dark w-100 " style={btnstyle}>開始使用</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover rounded-4">
                  <div class="ratio ratio-1x1 rounded-top-4 overflow-hidden">
                    <Image src={p3} width="550px" />
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title fw-bold">創卡．數位名片</h5>
                    <p class="text-secondary mb-3">建立你的品牌名片頁，整合社群連結、表單與 CTA，讓每一次分享都有轉換。</p>
                    <div class="d-flex gap-2">
                      <a href="https://xn--qer5v.tw/" class="btn btn-dark w-100 " style={btnstyle}>開始使用</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover rounded-4">
                  <div class="ratio ratio-1x1 rounded-top-4 overflow-hidden">
                    <Image src={p2} />
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title fw-bold">LEWEB 短網址服務</h5>
                    <p class="text-secondary mb-3">行銷活動必備短鏈平台，乾淨好記、可追蹤成效，支援 QR 與 UTM。</p>
                    <div class="d-flex gap-2">
                      <a href="https://leweb.io/home/" class="btn btn-dark w-100 btnstyle" style={btnstyle}>開始使用</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </>
  );
};

export default Home; // Exporting the component
