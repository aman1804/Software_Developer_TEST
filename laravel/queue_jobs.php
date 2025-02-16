// Problem: Sending emails synchronously slows down user experience.

// Solution: Use Laravel queues for asynchronous processing
public function handle() {
    Mail::to($this->user)->send(new NotificationMail()); // Process email in the background
}
