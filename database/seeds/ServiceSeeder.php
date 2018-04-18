<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Serviços de Redes*/
        Service::create([
            'name' => 'ACESSO À INTERNET SEM FIO',
            'description' => 'Dentro do espaço físico do Campus Arapiraca da Ufal, é fornecido acesso a Internet sem fio através da rede UfalMovel', 
            'target_public' => 'Comunidade Acadêmica e visitantes', 
            'requirements' => 'Dispositivo computacional que permita acesso a rede sem fio. Smartphone, tablet, notebook ou outro',
            'quick_help' => 'Senha de acesso ufalsong', 
            'slt_id' => 1,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'RAMAL SOFTPHONE',
            'description' => 'Número de ramal de 4 dígitos a partir do qual se pode ligar para outro ramal ou receber ligações de outros ramais de toda a Ufal', 
            'target_public' => 'Servidores', 
            'requirements' => 'Preenchimento de formulário de solicitação, dispositivo computacional que permita telefonia SIP (smartphone, por exemplo)',
            'quick_help' => '', 
            'slt_id' => 3,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'ACESSO REMOTO',
            'description' => 'Acesso externo via VNC, RDP ou SSH a máquina localizada dentro do Campus Arapiraca', 
            'target_public' => 'Servidores e alunos autorizados por servidores', 
            'requirements' => 'Equipamento com IP fixo em conformidade com políticas internas de Redes; serviço VNC, RDP ou SSH devidamente configurado; solicitação e criação de usuário para esta finalidade no setor de Redes',
            'quick_help' => '', 
            'slt_id' => 4,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'PROXY REVERSO CENTRAL',
            'description' => 'Exposição de serviço web interno ao Campus Arapiraca, para que se torne facilmente acessível por qualquer computador de fora da instituição.', 
            'target_public' => 'Servidores', 
            'requirements' => 'Equipamento com serviço HTTP devidamente configurado; sistema respondendo a partir de um subdiretório (por exemplo my.ara/sistema e não my.ara/); solicitação no setor de Redes',
            'quick_help' => '', 
            'slt_id' => 7,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'WEB WIKI',
            'description' => 'Wiki próprio sob gestão do solicitante.', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitação não conflitante com o conjunto de informações públicas oficialmente nas páginas da Ufal mantidas pela Ascom; solicitação no setor de Redes',
            'quick_help' => '', 
            'slt_id' => 91,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'CDTECA',
            'description' => 'Coletânea de imagens de CD e DVD de instalação de Sistemas Operacionais cuja licença permita redistribuição.', 
            'target_public' => 'Comunidade Acadêmica', 
            'requirements' => 'Acesso a central.arapiraca.ufal.br/cdteca',
            'quick_help' => '', 
            'slt_id' => 21,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        Service::create([
            'name' => 'AGENDA TELEFÔNICA',
            'description' => 'Agenda com todos os ramais físicos do Campus Arapiraca (e polos) e do Campus do Sertão (e polo)', 
            'target_public' => 'Sociedade', 
            'requirements' => 'Acesso a sistemas.arapiraca.ufal.br/telefones',
            'quick_help' => '', 
            'slt_id' => 22,
            'type' => 1,
            'sector_category_id' => 2,
        ]);
        
        Service::create([
            'name' => 'MONITORAMENTO DE TRÁFEGO WEB',
            'description' => 'Visualização da estrutura de rede física do Campus Arapiraca, tráfego e diagnóstico de problemas de redes.', 
            'target_public' => 'Comunidade Acadêmica', 
            'requirements' => 'Acesso a central.arapiraca.ufal.br/ e seleção da opção "Tráfego"',
            'quick_help' => '', 
            'slt_id' => 23,
            'type' => 1,
            'sector_category_id' => 2,
        ]);
        
        Service::create([
            'name' => 'SERVIDOR DE ARQUIVOS SMB',
            'description' => 'Serviço que permite acesso a arquivos centralizados em um servidor, bem como a criação de grupos para compartilhamento desses arquivos', 
            'target_public' => 'Servidores', 
            'requirements' => 'Acesso a partir da rede do Campus Arapiraca - Sede, solicitação no setor de Redes',
            'quick_help' => '', 
            'slt_id' => 24,
            'type' => 1,
            'sector_category_id' => 2,
        ]); 

        Service::create([
            'name' => 'ARQUIVOS EM NUVEM',
            'description' => 'Servidor de arquivos acessível via interface web ou via sincronização automática, com serviços associados, como calendário, agenda de contatos e compartilhamento de arquivos', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitação no setor de Redes; acesso a central.arapiraca.ufal.br/drive',
            'quick_help' => '', 
            'slt_id' => 25,
            'type' => 1,
            'sector_category_id' => 2,
        ]);


        Service::create([
            'name' => 'BLOG',
            'description' => 'Serviço de blog acessível dentro do campus ou, a critério do solicitante, de qualquer lugar via Internet', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitação não conflitante com o conjunto de informações públicas oficialmente nas páginas da Ufal mantidas pela Ascom; solicitação no setor de Redes',
            'quick_help' => '', 
            'slt_id' => 26,
            'type' => 1,
            'sector_category_id' => 2,
        ]);


        Service::create([
            'name' => 'CONFERÊNCIA EM AUDIO',
            'description' => 'Serviço de conversação em grupo, com compressão e recurso de gravação da conversa pelos próprios participantes', 
            'target_public' => 'Comunidade Acadêmica', 
            'requirements' => 'Instalação de cliente Mumble; acesso via cliente Mumble a central.arapiraca.ufal.br, na porta 64738',
            'quick_help' => '', 
            'slt_id' => 27,
            'type' => 1,
            'sector_category_id' => 2,
        ]);


        Service::create([
            'name' => 'MÁQUINA VIRTUAL',
            'description' => 'Máquina virtual para auxiliar em atividade técnica ou acadêmica	Máquina virtual para auxiliar em atividade técnica ou acadêmica', 
            'target_public' => 'Servidores', 
            'requirements' => 'Disponibilidade de recursos nos nós de virtualização (no setor de redes); solicitação no setor',
            'quick_help' => '', 
            'slt_id' => 28,
            'type' => 1,
            'sector_category_id' => 2,
        ]);

        /*Serviços do Setor de Sistemas*/
        Service::create([
            'name' => 'ALTERAÇÃO DE E-MAIL',
            'description' => 'Consiste na susbstituição do email cadastrado no sistema da UFAL', 
            'target_public' => 'Discentes e Servidores', 
            'requirements' => 'Apresentar um documento oficial de identificação com foto e informar o e-mail desejado',
            'quick_help' => '', 
            'slt_id' => 29,
            'type' => 1,
            'sector_category_id' => 3,
        ]);

        Service::create([
            'name' => 'ELABORAÇÃO DE PARECER TÉCNICO',
            'description' => 'Consiste na XXXXXXXXXXXXXXXXXXXXX', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitar via email institucional',
            'quick_help' => '', 
            'slt_id' => 30,
            'type' => 1,
            'sector_category_id' => 3,
        ]);


        Service::create([
            'name' => 'MANUTENÇÃO DOS SISTEMAS INSTITUCIONAIS',
            'description' => 'Consiste na atualização e correções dos principais sistemas utilizados pela instituição: SIGAA, SIGRH, SIPAC, SIGADMIN, SIWEB, SICAM, PERGAMUM, PERFIL, etc. ', 
            'target_public' => 'Discentes e Servidores', 
            'requirements' => 'Enviar por email com a descrição detalhada do problema e com o print da tela',
            'quick_help' => '', 
            'slt_id' => 31,
            'type' => 1,
            'sector_category_id' => 3,
        ]);


        Service::create([
            'name' => 'AJUSTE DE CONTEÚDO NO SITE',
            'description' => 'Consiste na atualização ou correção de informações', 
            'target_public' => 'Servidores', 
            'requirements' => 'O responsável por determinada área no site deve enviar o conteúdo (texto, imagens, arquivos, links) conforme deve ser colocado no site',
            'quick_help' => '', 
            'slt_id' => 32,
            'type' => 1,
            'sector_category_id' => 3,
        ]);

        Service::create([
            'name' => 'CADASTRO DE USUÁRIO NO SITE',
            'description' => 'Consiste na criação de um usuário para gerenciar determinda área do site', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitação do responsável por determinada área no site através email institucional informando os dados do novo usuário	Solicitação do responsável por determinada área no site através email institucional informando os dados do novo usuário',
            'quick_help' => '', 
            'slt_id' => 33,
            'type' => 1,
            'sector_category_id' => 3,
        ]);


        Service::create([
            'name' => 'NOVAS ÁREAS NO SITE',
            'description' => 'Consiste na inclusão de conteúdo', 
            'target_public' => 'Servidores', 
            'requirements' => 'Solicitação do responsável pelo setor na instituição ou área no site através do email institucional com o conteúdo que deve ser colocado no site.						',
            'quick_help' => '', 
            'slt_id' => 34,
            'type' => 1,
            'sector_category_id' => 3,
        ]);

        Service::create([
            'name' => 'TREINAMENTO DE USUÁRIOS',
            'description' => 'Consiste na orientação sobre o uso dos sistemas e na disponibilização de minicursos', 
            'target_public' => 'Discentes e Servidores', 
            'requirements' => 'Solicitação através do email institucional (servidores) e inscrição nos minicursos disponibilizados (Discentes e Servidores) 					',
            'quick_help' => '', 
            'slt_id' => 35,
            'type' => 1,
            'sector_category_id' => 3,
        ]);
    }
}
