cls
echo Realmente quer fazer backup?
pause

cls
echo ok, fazendo backup...
cd C:\Users\sistemas4\Alura_Cursos\CMD
mkdir backup

xcopy /E /Y "C:\Users\sistemas4\Alura_Cursos\CMD\codigo" "C:\Users\sistemas4\Alura_Cursos\CMD\backup"

echo Listando os arquivos do backup
dir C:\Users\sistemas4\Alura_Cursos\CMD\backup