import ChatboardDashboadController from './ChatboardDashboadController'
import ChatbotIntentController from './ChatbotIntentController'
import ChatbotIntentPhrasesController from './ChatbotIntentPhrasesController'
import ChatbotKnowledgeController from './ChatbotKnowledgeController'
import ChatbotConversationController from './ChatbotConversationController'
const Controller = {
    ChatboardDashboadController: Object.assign(ChatboardDashboadController, ChatboardDashboadController),
ChatbotIntentController: Object.assign(ChatbotIntentController, ChatbotIntentController),
ChatbotIntentPhrasesController: Object.assign(ChatbotIntentPhrasesController, ChatbotIntentPhrasesController),
ChatbotKnowledgeController: Object.assign(ChatbotKnowledgeController, ChatbotKnowledgeController),
ChatbotConversationController: Object.assign(ChatbotConversationController, ChatbotConversationController),
}

export default Controller