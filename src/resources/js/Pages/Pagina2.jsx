import {Head, Link} from '@inertiajs/react';
import Article  from '@/Components/Article';
import LinkItem from '@/Components/LinkItem';

export default function Pagina2() {
    return (
        <>
        <div >
                
            <div className="box-content md:box-border max-w-2xl mx-auto px-16 py-10">
                
                <Article 
                title="Teste do primeiro artigo"
                text="Este é um texto de teste para o primeiro artigo"
                url="/pagina3"
                />
                
                
            </div>

            <div className="box-content md:box-border max-w-2xl mx-auto px-16 py-10">
                
                <Article 
                title="Titulo de teste"
                text="Nada a declarar"
                url="/"
                />

            </div>
        



            <div className="box-content md:box-border max-w-4xl mx-auto px-4 py-8">


                <iframe class="aspect-video ..." src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>

            </div>
         </div>

    </>
    );
}