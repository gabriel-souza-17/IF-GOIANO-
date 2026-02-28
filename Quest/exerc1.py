# ============================================================
# EXERCÍCIO – SISTEMA FUZZY PARA CONTROLE DE IRRIGAÇÃO
# ============================================================
#
# Objetivo:
# Desenvolver um sistema fuzzy para determinar o tempo ideal
# de irrigação com base na temperatura ambiente e na umidade
# do solo.
#
# ------------------------------------------------------------
# Variáveis de Entrada:
#
# 1) Temperatura
#    - Intervalo: 0°C a 44°C
#
# 2) Umidade do Solo
#    - Intervalo: 0% a 100%
#
# ------------------------------------------------------------
# Variável de Saída:
#
# Tempo de Irrigação
# - Intervalo: 0 a 60 minutos
#
# ------------------------------------------------------------
# Regras do Sistema Fuzzy:
#
# 1) Se a umidade for BAIXA e a temperatura for ALTA,
#    então o tempo de irrigação deve ser LONGO.
#
# 2) Se a umidade for MÉDIA e a temperatura for MÉDIA,
#    então o tempo de irrigação deve ser MÉDIO.
#
# 3) Se a umidade for ALTA ou a temperatura for BAIXA,
#    então o tempo de irrigação deve ser CURTO.
#
# ------------------------------------------------------------
# Testes do Sistema:
#
# Caso 1:
# Temperatura = 32°C
# Umidade = 25%
#
# Caso 2:
# Temperatura = 20°C
# Umidade = 80%
#
# Caso 3:
# Temperatura = 28°C
# Umidade = 50%
#
# Após executar os testes, registrar os tempos de irrigação
# sugeridos pelo sistema fuzzy para cada caso.
#
# ============================================================

