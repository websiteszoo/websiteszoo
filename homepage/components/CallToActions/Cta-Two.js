import React, { useEffect } from "react";
import Image from "next/image";
import Link from "next/link";
import Sal from "sal.js";


import viewImg from "../../public/images/cta-img/view-img.png";
import bgShape from "../../public/images/cta-img/bg-shape.png";
import bgLight from "../../public/images/bg/bg-shape-tree.png";

const modal = {
  padding: "4rem 2rem",
  borderRadius: ".8rem",
  color: "var(--light)",
  boxShadow: "var(--m-shadow, .4rem .4rem 10.2rem .2rem) var(--shadow-1)",
  position: "fixed",
  overflow: "hidden"
};
const modalText = {
  padding: "10px 15px",
  fontSize: "1.6rem",
  lineHeight: 2,
  background: "linear-gradient(to right,#243243, #352D52);",
};
const modalTitle = {
  fontSize: "3.2rem",
  background: "linear-gradient(to right,#243243, #352D52);",
};
const modalTitleh1 = {
  fontSize: "2.75rem",
};
const CtaTwo = () => {
  useEffect(() => {
    Sal();
  }, []);
  return (
    <>
      <div className="row">
        <div className="col-lg-12">
          <div className="aiwave-cta">
            <div className="inner">
              <div className="content-left">
                <div
                  className="section-title text-left"
                  data-sal="slide-up"
                  data-sal-duration="400"
                  data-sal-delay="150"
                >
                  <h4 className="subtitle hsd">
                    <span className="theme-gradient">
                      Get Started with Rainbow
                    </span>
                  </h4>
                  <h2 className="title w-600 mb--20 hs">
                  由友情和夢想編織而成的樂創品牌
                  </h2>
                  <p className="description b1">
                  樂創數位行銷有限公司由兩位志同道合的好朋友芷萱和宗勳共同創立。兩人的緣分始於2019年，<br/>
                  在學校裡一起經營資訊社團，逐漸培養出深厚的默契和合作精神。這段關於友誼、夢想和共同成長的溫馨旅程，<br/>
                  見證了他們從相識到成為好朋友，再到攜手創業，實現共同夢想的過程。
                  </p>
                </div>
                <div className="app-store-btn">
                  <Link className="store-btn" href="#">
                  <button
                        className="btn-default bg-solid-primary"
                        data-bs-toggle="modal" data-bs-target="#about_modal"
                  >
                      關於樂創<i className="fa-sharp fa-regular fa-arrow-right"></i>
                  </button>
                  </Link>
                </div>
              </div>
              <div className="content-right">
                <div className="img-right">
                  <Image
                    src={viewImg}
                    width={449}
                    height={499}
                    alt="Mobile View"
                  />
                </div>
              </div>
              <div className="bg-shape-one">
                <Image src={bgShape} width={639} height={404} alt="Bg shape" />
              </div>
            </div>
            <div className="bg-shape-inside">
              <Image src={bgLight} width={968} height={1103} alt="Bg shape" />
            </div>
          </div>
        </div>
      </div>


<div class="modal fade" id="about_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style={modal}>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style={modalTitle}>
        <h1 class="modal-title " id="exampleModalLabel"  style={modalTitleh1}>關於樂創</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
      </div>
      <div class="modal-body" style={modalText}>
      樂創數位行銷有限公司由兩位志同道合的好朋友芷萱和宗勳共同創立。他們的緣分始於2019年，當時一起經營資訊社團，並逐漸培養出深厚的默契和合作精神。隨著時間的推移，他們的友誼越來 越深厚，對未來的夢想也越來越清晰。<br/><br/>

在即將畢業的前夕，兩人在宿舍裡共同創立了一個小小的工作室，踏上了他們的創業之路。他們用心血和汗水，逐步把這個小工作室發展成充滿希望和潛力的公司。最終於2023年2月，樂創數位行銷有限公司正式成立。<br/><br/>

公司成立後，樂創數位行銷集結了一群充滿熱情與才華的專業人才，包括前端工程師、後端工程師和視覺設計師等。每個成員都致力於為客戶提供全方位的優質服務。樂創數位行銷的宗旨是「幫助許多企業在數位時代中脫穎而出，取得成功」。我們始終堅持以客戶為中心，根據每個客戶的獨特需求，量身定制合適的方案，並不斷追求卓越，提升服務質量。<br/><br/>

樂創數位行銷是一段由友情和夢想編織而成的溫馨旅程。我們將繼續書寫更多成功與感動的篇章。
      </div>
    </div>
  </div>
</div>

    </>
  );
};

export default CtaTwo;
