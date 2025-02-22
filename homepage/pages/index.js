import BackToTop from "./backToTop";
import HomePage from "./home";

export default function Home() {
  return (
    <>
 <noscript>
        <iframe
          src="https://www.googletagmanager.com/ns.html?id=GTM-MKZ6P38H"
          height="0"
          width="0"
          style={{ display: "none", visibility: "hidden" }}
        ></iframe>
      </noscript>
      <HomePage />
      <BackToTop />
    </>
  );
}
