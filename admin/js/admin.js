'use strict';

$(function() {
    
    const modals = {
        group: {
            node: $('#glcnf-create-update-group'),
            create: { action: 'create-group' },
            update: { action: 'update-group' }
        }
    };
    
    const currentURL = new URL(window.location.href);
    const URLparams  = currentURL.searchParams;
    
    const currentModal = { target: null, id: null };
    
    /* Установить текущее модальное окно */
    switch ( URLparams.get('action') ) {
        case modals.group.create.action:
            currentModal.target = modals.group.node;
            break;
        case modals.group.update.action:
            currentModal.target = modals.group.node;
            break;
        case 'update-option':
            console.log('update option');
            break;
        default:
            console.log('none')
    }
    
    const modalDefauls = {
        zIndex: 999991,
        overlay: {
            fillColor: '#000',
            opacity: 0.8,
            zIndex: 999990
        },
        open(event) {
            URLparams.set( 'action', $(event.target).data('action') );
            history.pushState({}, 'Модальное окно открыто', currentURL.href);
        },
        close() {
            URLparams.delete( 'action' );
            history.pushState({}, 'Модальное окно закрыто', currentURL.href);
        }
    }
    
    if ( currentModal.target ) {
        currentModal.target.plainModal({ ...modalDefauls }).plainModal('open');
    }
    
    
    $(`${glcnf.contQuerySel} input[name="create-group"]`).on( 'click', function() {
        modals.group.node.plainModal({ ...modalDefauls }).plainModal('open');
    } );
    
    
    
    
    const el = document.getElementById('options-table');
    
    var dragger = tableDragger.default(el, {
        mode: 'row',
        onlyBody: true,
    });
    
    dragger.on('out',function(el){
      console.log(el);
    });
    
});