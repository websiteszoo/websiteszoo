import Image from "next/image";
import Link from "next/link";
import React from "react";

import FooterData from "../../data/footer.json";

import logo from "../../public/images/logo/logo.png";
import FooterProps from "./FooterProps";

const Footer = () => {
  return (
    <>
      <footer className="rainbow-footer footer-style-default footer-style-3 position-relative">
        <div className="footer-top">
          <div className="container">
            <div className="row justify-content-between">
              <div className="col-lg-4 col-md-6 col-sm-12 col-12">
                <div className="rainbow-footer-widget">
                  <div className="logo">
                    <Link href="/">
                      <Image
                        className="logo-light"
                        src={logo}
                        width={300}
                        height={80}
                        alt="ChatBot Logo"
                      />
                    </Link>
                  </div>
                  <p className="b1 desc-text">
                  產品無限，樂創精彩呈現
                  </p>
                  <h6 className="subtitle">Office Hours｜週一 至 週五 10am - 6pm</h6>
                </div>
              </div>


              <div className="col-lg-4 col-md-6 col-sm-6 col-12">
                {FooterData &&
                  FooterData.footer.map((data, index) => (
                    <div className="rainbow-footer-widget" key={index}>
                      <FooterProps list={data.services} />
                    </div>
                  ))}
              </div>

              <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                {FooterData &&
                  FooterData.footer.map((data, index) => (
                    <div className="rainbow-footer-widget" key={index}>
                      <div className="widget-menu-top">
                 
                      <iframe width="560" height="230" src="https://www.youtube.com/embed/Y_1ATOCP-14?si=iEAYYe_PbStvHh7w&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
               
                        
                      </div>
                    </div>
                  ))}
              </div>
            </div>
          </div>
        </div>
      </footer>
    </>
  );
};

export default Footer;
