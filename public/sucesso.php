<?php

$caminhoArquivo = dirname(__DIR__) . '/src/screen-match/filme.json';

$filme = null;
$erro = null;

if (!file_exists($caminhoArquivo)) {
    $erro = 'Arquivo filme.json não encontrado em: ' . $caminhoArquivo;
} else {
    $conteudoArquivo = file_get_contents($caminhoArquivo);
    $filme = json_decode($conteudoArquivo, true);

    if ($filme === null) {
        $erro = 'Não foi possível converter o JSON. Erro: ' . json_last_error_msg();
    }
}

function formatarGenero(?string $genero): string
{
    return match ($genero) {
        'super-heroi' => 'Super-herói',
        'comedia' => 'Comédia',
        'acao' => 'Ação',
        'drama' => 'Drama',
        'terror' => 'Terror',
        'ficcao-cientifica' => 'Ficção científica',
        default => 'Gênero desconhecido',
    };
}

$nome = $filme['nome'] ?? '';
$ano = $filme['ano'] ?? $filme['anoLancamento'] ?? '';
$nota = $filme['nota'] ?? '';
$genero = $filme['genero'] ?? '';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme exportado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center bg-fixed bg-no-repeat px-5 py-10 text-white" style="background-image: url('https://gracecursed.home.blog/wp-content/uploads/2018/06/tumblr_p6p8jjz2d21vbzt0ko2_540.gif');">
<div class="fixed inset-0 bg-black/75"></div>
<main class="relative z-10 mx-auto flex min-h-[calc(100vh-5rem)] max-w-xl items-center">
    <section class="w-full rounded-2xl bg-white/95 p-6 text-slate-900 shadow-2xl backdrop-blur">
        <?php if ($erro !== null): ?>
            <div class="mb-6 text-center">
                <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-red-100 text-3xl">⚠️</div>
                <h1 class="text-2xl font-bold text-[#141e30]">Erro ao carregar filme</h1>
            </div>
            <div class="mb-6 rounded-xl bg-red-100 p-4 font-semibold text-red-800">
                <?= htmlspecialchars($erro) ?>
            </div>
            <a href="index.php" class="block rounded-xl bg-[#141e30] px-4 py-3 text-center font-bold text-white transition hover:bg-[#243b55]">
                Voltar
            </a>
        <?php else: ?>
            <div class="mb-6 text-center">
                <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-yellow-400 text-4xl shadow-lg">🎬</div>
                <h1 class="text-3xl font-bold text-[#141e30]">Filme exportado!</h1>
                <p class="mt-2 text-sm text-slate-500">As informações foram salvas no arquivo JSON.</p>
            </div>
            <div class="mb-6 rounded-xl bg-green-100 p-4 text-center font-bold text-green-800">
                JSON gerado com sucesso.
            </div>
            <ul class="space-y-3">
                <li class="rounded-xl bg-slate-100 p-4">
                    <span class="mb-1 block text-sm text-slate-500">Nome do filme</span>
                    <strong class="text-lg text-slate-900"><?= htmlspecialchars($nome) ?></strong>
                </li>
                <li class="rounded-xl bg-slate-100 p-4">
                    <span class="mb-1 block text-sm text-slate-500">Ano de lançamento</span>
                    <strong class="text-lg text-slate-900"><?= htmlspecialchars((string) $ano) ?></strong>
                </li>
                <li class="rounded-xl bg-yellow-400 p-4 text-slate-900">
                    <span class="mb-1 block text-sm text-yellow-900">Nota</span>
                    <strong class="text-lg"><?= htmlspecialchars((string) $nota) ?>/10</strong>
                </li>
                <li class="rounded-xl bg-slate-100 p-4">
                    <span class="mb-1 block text-sm text-slate-500">Gênero</span>
                    <strong class="text-lg text-slate-900"><?= htmlspecialchars(formatarGenero($genero)) ?></strong>
                </li>
            </ul>
            <div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2">
                <a href="index.php" class="rounded-xl bg-[#141e30] px-4 py-3 text-center font-bold text-white transition hover:bg-[#243b55]">
                    Cadastrar outro
                </a>
                <a href="ver-json.php" class="rounded-xl bg-yellow-400 px-4 py-3 text-center font-bold text-slate-900 transition hover:bg-yellow-300">
                    Ver JSON
                </a>
            </div>
        <?php endif; ?>
    </section>
</main>
</body>
</html>