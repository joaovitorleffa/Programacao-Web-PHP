= controler 
  montar a estrutura do site fazendo o request dos templates
= index
  faz a chama dos métodos do controler para construir o site
  - verifica se é a primeira vez que foi acessado, se for chama $site->index();
  - senão criase um switch (pro c)
  - após criase outro switch (para a) para saber qual template o user que acessar

  "?c=s
