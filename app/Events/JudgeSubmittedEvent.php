<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class JudgeSubmittedEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public int $judgeId;
    public string $category;
    public function __construct(int $judgeId, string $category)
    {
        $this->judgeId = $judgeId;
        $this->category = $category;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('judging'),
            new PrivateChannel('judge.' . $this->judgeId),
        ];
    }

    public function broadcastAs(): string
    {
        return 'JudgeSubmittedEvent';
    }

    public function broadcastWith(): array
    {
        return [
            'judgeId' => $this->judgeId,
            'category' => $this->category,
        ];
    }
}
