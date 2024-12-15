<?php

return [

    'invoice_number'        => 'Αριθμός Τιμολογίου',
    'invoice_date'          => 'Ημερομηνία Τιμολογίου',
    'invoice_amount'        => 'Σύνολο τιμολογίου',
    'total_price'           => 'Συνολική Τιμή',
    'due_date'              => 'Ημ/νία Προθεσμίας Πληρωμής',
    'order_number'          => 'Αριθμός παραγγελίας',
    'bill_to'               => 'Πληρωτέες σε',
    'cancel_date'           => 'Ημερομηνία Ακύρωσης',

    'quantity'              => 'Ποσότητα',
    'price'                 => 'Τιμή',
    'sub_total'             => 'Μερικό Σύνολο',
    'discount'              => 'Έκπτωση',
    'item_discount'         => 'Γραμμή έκπτωσης',
    'tax_total'             => 'Σύνολο φόρου',
    'total'                 => 'Σύνολο',

    'item_name'             => 'Όνομα Προϊόντος|Ονόματα Προϊόντων',
    'recurring_invoices'    => 'Επαναλαμβανόμενα Τιμολόγια',

    'show_discount'         => ':discount % Έκπτωση',
    'add_discount'          => 'Προσθήκη έκπτωσης',
    'discount_desc'         => 'του μερικού συνόλου',

    'payment_due'           => 'Ημ/νία Προθεσμίας Πληρωμής',
    'paid'                  => 'Εξοφλημένο',
    'histories'             => 'Ιστορικό',
    'payments'              => 'Πληρωμές',
    'add_payment'           => 'Προσθήκη Πληρωμής',
    'mark_paid'             => 'Σημείωσε ως Εξοφλημένο',
    'mark_sent'             => 'Σημείωσε ως Απεσταλμένο',
    'mark_viewed'           => 'Σημείωση ως αναγνωσμένο',
    'mark_cancelled'        => 'Σημείωση ως ακυρωμένο',
    'download_pdf'          => 'Λήψη PDF',
    'send_mail'             => 'Αποστολή email Μηνύματος',
    'all_invoices'          => 'Συνδεθείτε για να δείτε όλα τα τιμολόγια',
    'create_invoice'        => 'Δημιουργία Τιμολογίου',
    'send_invoice'          => 'Αποστολή Τιμολογίου',
    'get_paid'              => 'Λήψη Πληρωμής',
    'accept_payments'       => 'Δεχτείτε ηλεκτρονικές πληρωμές',
    'payments_received'     => 'Πληρωμές που ελήφθησαν',

    'form_description' => [
        'billing'           => 'Στοιχεία χρέωσης εμφανίζονται στο λογαριασμό σας. Ημερομηνία χρέωσης χρησιμοποιείται στον πίνακα ελέγχου και αναφορές. Επιλέξτε την ημερομηνία που αναμένετε να πληρώσετε ως ημερομηνία πληρωμής.',
    ],

    'messages' => [
        'email_required'    => 'Δεν υπάρχει διεύθυνση email για αυτόν τον πελάτη!',
        'totals_required'   => 'Απαιτούνται σύνολα τιμολογίου Παρακαλώ επεξεργαστείτε το :type και αποθηκεύστε το ξανά.',

        'draft'             => 'Αυτό το τιμολόγιο είναι <b>ΠΡΟΧΕΙΡΟ</b> και θα εμφανιστεί στα γραφήματα μετά την παραλαβή του.',

        'status' => [
            'created'       => 'Δημιουργήθηκε στις :date',
            'viewed'        => 'Έχει προβληθεί',
            'send' => [
                'draft'     => 'Δεν εστάλη',
                'sent'      => 'Εστάλη στις :date',
            ],
            'paid' => [
                'await'     => 'Αναμένεται εξόφληση',
            ],
        ],

        'name_or_description_required' => 'Το τιμολόγιό σας πρέπει να εμφανίζει τουλάχιστον ένα από τα <b>:name</b> ή <b>:description</b>.',
    ],

    'share' => [
        'show_link'         => 'Ο πελάτης σας μπορεί να δει το τιμολόγιο σε αυτόν τον σύνδεσμο',
        'copy_link'         => 'Αντιγράψτε τον σύνδεσμο και μοιραστείτε τον με τον πελάτη σας.',
        'success_message'   => 'Αντιγράφηκε σύνδεσμος κοινής χρήσης στο πρόχειρο!',
    ],

    'sticky' => [
        'description'       => 'Προεπισκόπιση του τρόπου με τον οποίο ο πελάτης σας θα δει την έκδοση ιστού του τιμολογίου σας.',
    ],

];