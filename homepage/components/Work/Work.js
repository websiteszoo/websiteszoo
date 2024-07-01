import React, { useEffect, useState } from "react";
import Link from "next/link";
import Image from "next/image";
import Sal from "sal.js";

import PricingData from "../../data/pricing.json";

import SplitImg from "../../public/images/split/split-2.png";
import SplitLogo from "../../public/images/split/split-2-logo.png";
import bannerImg from "../../public/images/bg/slider-main-image.png";
import shapeOne from "../../public/images/bg/icon-shape/icon-shape-one.png";
import shapeTwo from "../../public/images/bg/icon-shape/icon-shape-two.png";
import shapeThree from "../../public/images/bg/icon-shape/icon-shape-three.png";
import shapeFour from "../../public/images/bg/icon-shape/icon-shape-four.png";
import bgShape from "../../public/images/bg/split-bg-shape.png";
import bgShapeOne from "../../public/images/bg/bg-shape-four.png";
import bgShapeTwo from "../../public/images/bg/bg-shape-five.png";
import bgShapeThree from "../../public/images/bg/bg-shape-two.png";

import BrandList from "../Brands/BrandList";
import TabStyleOne from "../TabStyles/TabStyle-One";
import AdvanceTab from "../TabStyles/AdvanceTab";
import CtaOne from "../CallToActions/Cta-One";
import Pricing from "../Pricing/Pricing";
import Testimonial from "../Testimonials/Testimonial";
import BrandTwo from "../Brands/Brand-Two";
import CtaTwo from "../CallToActions/Cta-Two";

const Home = () => {
  const [visibleIndex, setVisibleIndex] = useState(0);

  useEffect(() => {
    Sal();

    const intervalId = setInterval(() => {
      setVisibleIndex((prevIndex) => (prevIndex + 1) % 3);
    }, 2000);

    return () => {
      clearInterval(intervalId);
    };
  }, []);

  return (
    <>
      <div
        className="slider-area slider-style-1 variation-default slider-bg-image bg-banner1 slider-bg-shape"
        data-black-overlay="1"
      >


        <div className="bg-shape">
          <Image
            className="bg-shape-one"
            width={640}
            height={949}
            src={bgShapeOne}
            alt="Bg Shape"
          />
          <Image
            className="bg-shape-two"
            src={bgShapeTwo}
            width={626}
            height={1004}
            alt="Bg Shape"
          />
        </div>
      </div>
        <br/>
        <br/>
      <div className="rainbow-service-area rainbow-section-gap">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div
                className="section-title text-center pb--60"
                data-sal="slide-up"
                data-sal-duration="700"
                data-sal-delay="100"
              >
                <h4 className="subtitle">
                  <span className="theme-gradient">
                  </span>
                </h4>
                <h2 className="title mb--0">
                  客戶案例
                </h2>
                <br/>
                <h5 className="title mb--0">
                  首頁 ・ 客戶案例
                </h5>
              </div>
            </div>
          </div>
          <TabStyleOne />
        </div>
      </div>
    </>
  );
};

export default Home;
