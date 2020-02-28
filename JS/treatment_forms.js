let add_to_preview = document.getElementById("add_preview")
let table_preview = document.getElementById("table_preview")

add_to_preview.addEventListener("click", add_preview)

function add_preview(e) {
    let check = e.target.parentNode.parentNode.parentNode
    console.log(check)
    let medic = check.querySelector('input[name="medic"]').value
    console.log(medic)
    let mg = check.querySelector('input[name="medic_mg"]').value
    console.log(mg)

    if (check.querySelector('input[name="lundi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="lundi_8"]').textContent += medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="lundi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="lundi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="lundi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="lundi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="lundi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="lundi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="lundi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="mardi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="mardi_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="mardi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="mardi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="mardi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="mardi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="mardi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="mardi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="mardi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="mercredi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="mercredi_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="mercredi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="mercredi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="mercredi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="mercredi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="mercredi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="mercredi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="mercredi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="jeudi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="jeudi_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="jeudi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="jeudi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="jeudi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="jeudi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="jeudi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="jeudi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="jeudi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="vendredi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="vendredi_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="vendredi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="vendredi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="vendredi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="vendredi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="vendredi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="vendredi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="vendredi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="samedi_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="samedi_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="samedi_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="samedi_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="samedi_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="samedi_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="samedi_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="samedi_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="samedi_nuit"]').textContent = medic
        }
    }

    if (check.querySelector('input[name="dimanche_check"]').checked){
        if (check.querySelector('input[name="8_check"]').checked){
            table_preview.querySelector('td[id="dimanche_8"]').textContent = medic
        }
        if (check.querySelector('input[name="10_check"]').checked){
            table_preview.querySelector('td[id="dimanche_10"]').textContent = medic
        }
        if (check.querySelector('input[name="12_check"]').checked){
            table_preview.querySelector('td[id="dimanche_12"]').textContent = medic
        }
        if (check.querySelector('input[name="14_check"]').checked){
            table_preview.querySelector('td[id="dimanche_14"]').textContent = medic
        }
        if (check.querySelector('input[name="16_check"]').checked){
            table_preview.querySelector('td[id="dimanche_16"]').textContent = medic
        }
        if (check.querySelector('input[name="18_check"]').checked){
            table_preview.querySelector('td[id="dimanche_18"]').textContent = medic
        }
        if (check.querySelector('input[name="20_check"]').checked){
            table_preview.querySelector('td[id="dimanche_20"]').textContent = medic
        }
        if (check.querySelector('input[name="nuit_check"]').checked){
            table_preview.querySelector('td[id="dimanche_nuit"]').textContent = medic
        }
    }
}