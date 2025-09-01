import LogoUaneIcon from '@/icons/logouane.svg';
import FacebookIcon from '@/icons/facebook.svg';
import InstagramIcon from '@/icons/instagram.svg';
import YoutubeIcon from '@/icons/youtube.svg';
import WhatsAppIcon from '@/icons/whatsapp.svg';

const socialIcons = [FacebookIcon, InstagramIcon, YoutubeIcon];

export const PageFooter = () => {
  return (
    <footer className="bg-secondary-medium flex-col 2xl:flex-row w-full">
      <div className="footer-social flex items-center justify-between py-6 flex-col gap-2 2xl:flex-row bg-gray w-full 2xl:px-[72px]">
        <div className="logo-uane">
          <LogoUaneIcon />
        </div>
        <div className="flex flex-col gap-2 md:grid md:grid-cols-3 md:gap-3 md:justify-between md:items-start w-full p-4">
          <div className="info flex flex-col gap-3 items-center text-center mt-4">
            <h4 className="font-semibold">Informações</h4>
            <div className="flex flex-col gap-1 items-center text-center">
              <p className="text-secondary-low">Perguntas Frequentes</p>
              <p className="text-secondary-low">Política de Privacidade</p>
            </div>
          </div>
          <div className="info flex flex-col gap-3 items-center text-center mt-4">
            <h4 className="font-semibold">Fale conosco</h4>
            <div className="flex gap-1 items-center text-center">
              <WhatsAppIcon />
              <p className="text-secondary-low">(85) 99332-8888</p>
            </div>
          </div>

          <div className="info flex flex-col gap-3 items-center text-center mt-4">
            <h4 className="font-semibold">Nos acompanhe nas redes sociais</h4>

            <div className="flex gap-3 items-center">
              {socialIcons.map((SocialIcon, index) => (
                <div
                  key={`social_icon_${index + 1}`}
                  className="w-8 h-8 flex bg-secondary-low items-center justify-center rounded-4xl"
                >
                  <SocialIcon />
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
      <div className="footer-endereco text-center flex flex-col md:justify-between md:flex-row items-center text-white py-4 px-3 gap-4 2xl:px-[72px]">
        <p>Av. Aguanambi, 282 A - Joaquim Távora, Fortaleza - CE, 60055-402</p>
        <p>Expediente</p>
      </div>
    </footer>
  );
};
