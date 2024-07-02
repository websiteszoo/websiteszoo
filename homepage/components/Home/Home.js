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


const galleryData = [
  {
    stripClass: 'one',
    photos: [
      { src: '/images/work/13.png', name: '企業形象網站' },
      { src: '/_next/static/media/001.da5e25b7.png', name: '系統開發' },
      { src: '/images/work/08.png', name: '企業形象網站' },
      { src: '/_next/static/media/002.18d57476.png', name: '企業形象網站' },
    ],
  },
  {
    stripClass: 'two',
    photos: [
      { src: '/images/work/07.png', name: '企業形象網站' },
      { src: '/images/work/12.png', name: '品牌型錄式網站' },
      { src: '/images/work/06.png', name: '一頁式形象網站' },
      { src: '/images/work/01.png', name: '客製系統開發' },
    ],
  },
  {
    stripClass: 'three',
    photos: [
      { src: '/images/work/11.png', name: '品牌型錄式網站' },
      { src: '/images/work/04.png', name: '企業形象官網' },
      { src: '/images/work/14.png', name: '一頁式形象網站' },
      { src: '/images/work/15.png', name: '一頁式形象網站' },
    ],
  },
  {
    stripClass: 'four',
    photos: [
      { src: '/images/work/10.png', name: '企業形象網站' },
      { src: '/images/work/13.png', name: '一頁式形象網站' },
      { src: '/images/work/02.png', name: '系統開發' },
      { src: '/_next/static/media/002.18d57476.png', name: '預約系統開發' },
    ],
  },
];



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
    <div className="gallery">
      {galleryData.map((strip, index) => (
        <div key={index} className="gallery__strip__wrapper">
          <div className={`gallery__strip ${strip.stripClass}`}>
            {strip.photos.map((photo, photoIndex) => (
              <div key={photoIndex} className="photo">
                <div className="photo__image">
                  <img src={photo.src} alt={photo.name} />
                </div>
                <div className="photo__name">{photo.name}</div>
              </div>
            ))}
          </div>
        </div>
      ))}
    </div>
      <div
        className="slider-area slider-style-1 variation-default slider-bg-image bg-banner1 slider-bg-shape"
        data-black-overlay="1"
        id="about"
      >

       
      </div>
      <br/><br/><br/>
      <div className="rainbow-cta-area rainbow-section-gap rainbow-section-gapBottom-big" >
        <div className="container">
          <CtaTwo />
        </div>
      </div>

      <div className="aiwave-pricing-area wrapper rainbow-section-gap-big">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div
                className="section-title text-center"
                data-sal="slide-up"
                data-sal-duration="400"
                data-sal-delay="150"
              >
                <h4 className="subtitle">
                  <span className="theme-gradient">Pricing</span>
                </h4>
                <h2 className="title w-600 mb--40">
                選擇適合您的方案
                </h2>
              </div>
            </div>
          </div>

          <Pricing
            parentClass="col-xl-4 col-lg-6 col-md-6 col-12 mt--40"
            start={0}
            end={5}
            isBadge={true}
            gap="mt_dec--40"
          />
        </div>
      </div>
      <div className="rainbow-advance-tab-area aiwave-bg-gradient rainbow-section-gap-big ">
        <div className="container ">
          <div className="html-tabs hs" data-tabs="true">
            <AdvanceTab />
          </div>
        </div>
        <div className="bg-shape">
          <Image src={bgShape} width={630} height={879} alt="Bg Shape" />
        </div>
      </div>
    </>
  );
};

export default Home;
